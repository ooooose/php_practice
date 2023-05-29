<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\ContactRepositoryInterface;
use App\Models\Department;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;

class ContactRepository implements ContactRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function getDepartmentsIds(): Collection
    {
        return Department::select('id', 'name')->get();
    }

    /**
     * @inheritDoc
     */
    public function getContactsColumns(): Collection
    {
        return Contact::select('department_id', 'name', 'gender','email', 'content')->get();
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
