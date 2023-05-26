<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Contact;
use App\Services\ContactServiceInterface;
use App\Repositories\ContactRepository;
use App\Repositories\ContactRepositoryInterface;

class ContactService implements ContactServiceInterface
{

    private $contact_repository;

    public function __construct(
        ContactRepositoryInterface $contact_repository
    ) {
        $this->contact_repository = $contact_repository;
    }

    /**
     * @inheritDoc
     */
    public function getDepartments()
    {
        return $this->contact_repository->getDepartmentsIds();
    }

    /**
     * @inheritDoc
     */
    public function getContacts()
    {
        return $this->contact_repository->getContactsColumns();
    }

    /**
     * @inheritDoc
     */
    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender): Contact
    {
        return $this->contact_repository->createContactInstance($department_id, $name, $email, $content, $age, $gender);
    }

    /**
     * @inheritDoc
     */
    public function checkGender(Contact $contact): string
    {
        if($contact->gender === 1) {
            $gender = '男性'; 
        } elseif($contact->gender === 2) {
            $gender = '女性'; 
        } elseif($contact->gender === 3) {
            $gender = '未回答';
        }
    return $gender;
    }           

}