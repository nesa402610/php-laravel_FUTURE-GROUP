<?php

namespace App\Http\Controllers;

use App\Models\contacts;
use Faker\Provider\Address;
use Faker\Provider\Company;
use Faker\Provider\DateTime;
use Faker\Provider\Person;
use Faker\Provider\PhoneNumber;
use Illuminate\Http\Request;

class contactsController extends Controller {
    //Получение всех запимей
    public function getContacts() {
        $all = contacts::paginate(8);
        return view('allContacts', ['all'=>$all]);
    }

//Получение конкретной записи
    public function getContact($id) {
        return contacts::find($id);
    }
    public function addRndContact(Request $request) {
        //Добавление записей и сохранине в бд
        $contact = new contacts;
        $contact->name = Person::firstNameMale().' '.Person::firstNameFemale();
        $contact->company = Company::lexify();
        $contact->phone = PhoneNumber::numberBetween(1234567890, 9876543210);
        $contact->email = Address::lexify();
        $contact->birthday = DateTime::dateTime();
        $contact->photo = $request->photo;
        $contact->save();
        //редирект на главную
        return redirect('/');
    }
    public function addContact(Request $request) {
        //Проверка, что есть необходимые поля
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);
        //Добавление записей и сохранине в бд
        $contact = new contacts;
        $contact->name = $request->name;
        $contact->company = $request->company;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->birthday = $request->birthday;
        $contact->photo = $request->photo;
        $contact->save();
        //редирект на главную
        return redirect('/');
    }

//как понял это для изменения записи
    public function editContact(Request $request, $id) {
        $contact = contacts::find($id);
        $contact->name = $request->name;
        $contact->company = $request->company;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->birthday = $request->birthday;
        $contact->photo = $request->photo;
        $contact->save();
        return redirect('/');
    }

    public function deleteContact($id) {
        contacts::destroy($id);
        return redirect('/');


    }
}
