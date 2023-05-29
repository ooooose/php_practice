<?php
declare(strict_types=1);

namespace App\Repositories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Collection;

/**
 * Interface ContactRepository
 * お問合せ（Contact）情報の操作を行うRepository
 */
interface ContactRepositoryInterface
{
    /**
     * お問合せ部署を全て取得する。
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getDepartmentsIds(): Collection;

    /**
     * すべてのお問合せを取得する。
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getContactsColumns(): Collection;

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
    public function createContactInstance(int $department_id, string $name, string $email, string $content, int $age, int $gender): Contact;
}
