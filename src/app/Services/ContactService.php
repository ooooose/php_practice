<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Contact;
use App\Services\ContactServiceInterface;
use App\Repositories\ContactRepository;
use App\Repositories\ContactRepositoryInterface;

class ContactService implements ContactServiceInterface
{

    private $contactRepository;

    public function __construct(
        ContactRepositoryInterface $contactRepository
    ) {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @inheritDoc
     */
    public function getDepartments()
    {
        return $this->contactRepository->getDepartmentsIds();
    }

    /**
     * @inheritDoc
     */
    public function getContacts()
    {
        return $this->contactRepository->getContactsColumns();
    }

    /**
     * @inheritDoc
     */
    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender): Contact
    {
        return $this->contactRepository->createContactInstance($department_id, $name, $email, $content, $age, $gender);
    }

    /**
     * @inheritDoc
     */
    public function checkGenders($contacts): array
    {
        $genders = [];

        foreach($contacts as $contact)
        {
            if ($contact->gender == 1) {
                array_push($genders, '男性');
            } 
            if ($contact->gender == 2) {
                array_push($genders, '女性');
            } 
            if ($contact->gender == 3) {
                array_push($genders, '未回答');
            } 
        }
        
        return $genders;
    }           

}
