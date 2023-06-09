<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;

/**
 * Interface ContactService
 * お問合せ（Contact）に関するビジネスロジックを記載するService
 */
interface ContactServiceInterface
{
     /**
     * お問合せ部署を全て取得する。
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getDepartments(): Collection;

    /**
     * すべてのお問合せを取得する。
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getContacts(): Collection;

    /**
     * お問合せ(Contact)を作成します
     *
     * @param int $department_id 部署ID
     * @param string $name ユーザー名
     * @param string $email メールアドレス
     * @param string $content お問合せ内容
     * @param int $age 年齢
     * @param int $gender 性別
     * @return Contact 作成したお問合せ
     */
    public function createContact(int $department_id, string $name, string $email, string $content, int $age, int $gender): Contact;

    /**
     * 性別の表示を「1,2,3」から「男性,女性,未回答」に変更する。
     *
     * @param $contacts 全お問合せ
     *
     * @return array $genders 性別
     */
    public function checkGenders($contacts): array;

}
