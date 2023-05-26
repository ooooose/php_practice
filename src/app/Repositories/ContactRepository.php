<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\ContactRepositoryInterface;
use App\Models\Department;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function getDepartmentsIds()
    {
        return Department::select('id', 'name')->get();
    }

    /**
     * @inheritDoc
     */
    public function getContactsColumns()
    {
        return Contact::select('department_id', 'name', 'email', 'content')->get();
    }

    /**
     * @inheritDoc
     */
    public function createContactInstance(int $department_id, string $name, string $email, string $content, int $age, int $gender): Contact
    {
        return Contact::create([
            'department_id' => $department_id,
            'name' => $name,
            'email' => $email,
            'content' => $content,
            'age' => $age,
            'gender' => $gender,
        ]);
    }

}
