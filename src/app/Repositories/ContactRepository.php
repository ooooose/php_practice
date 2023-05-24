<?php

namespace App\Repositories;

use App\Repositories\ContactRepositoryInterface;
use App\Models\Department;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{
    public function getDepartments()
    {
        return Department::select('id', 'name')->get();
    }

    public function getContacts()
    {
        return Contact::select('department_id', 'name', 'email', 'content')->get();
    }

}
