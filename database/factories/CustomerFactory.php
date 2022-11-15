<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // ダミーファイルの生成の修正
        // 住所に郵便番号が挿入されるところと電話番号にハイフンが入るところを修正する

        // 電話番号のハイフンをなくす 第三引数に文字列指定
        $tel = str_replace('-', '', $this->faker->phoneNumber);

        // 郵便番号の削除 mb_substr()で頭から指定したも自分カットしてから取得する
        // 第二引数で何文字目から使うか指定する 9文字目から使う PHPの関数
        $address = mb_substr($this->faker->address, 9);

        return [
            'name' => $this->faker->name,
            'kana' => $this->faker->kanaName,
            'tel' => $tel,
            'email' => $this->faker->email,
            'postcode' => $this->faker->postcode,
            'address' => $address,
            'birthday' => $this->faker->dateTime,
            'gender' => $this->faker->numberBetween(0, 2),
            'memo' => $this->faker->realText(50),
        ];
    }
}
