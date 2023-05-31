<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'department_id' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'content' => ['required', 'string', 'max:1000'],
            'age' => ['required', 'integer', 'min:1', 'max:100'],
            'gender' => ['required', 'integer', Rule::in([1, 2, 3])],
        ];
    }

    /**
     * お問合せ部署
     * @return int
     */
    public function getDepartmentId(): int
    {
        return (int) $this->input('department_id');
    }

    /**
     * お名前
     * @return string
     */
    public function getName(): string
    {
        return $this->input('name');
    }

    /**
     * メールアドレス
     * @return string
     */
    public function getEmail(): string
    {
        return $this->input('email');
    }

    /**
     * お問合せ内容
     * @return string
     */
    public function getContents(): string
    {
        return $this->input('content');
    }

    /**
     * 年齢
     * @return int
     */
    public function getAge(): int
    {
        return (int) $this->input('age');
    }

    /**
     * 性別
     * @return int
     */
    public function getGender(): int
    {
        return (int) $this->input('gender');
    }

}
