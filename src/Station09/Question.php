<?php declare(strict_types=1);

namespace Src\Station09;

use function array_key_exists;

class Question
{
    public function main(): array
    {
        $users = [
          [
              'id' => 1,
              'last_name' => '山田',
              'first_name' => '太郎',
              'age' => 20,
              'password' => 'yamada',
          ],
          [
              'id' => 2,
              'last_name' => '鈴木',
              'first_name' => '次郎',
              'password' => 'suzuki',
          ],
          [
              'id' => 3,
              'last_name' => '佐藤',
              'first_name' => '花子',
              'password' => 'sato',
          ],
        ];

        $new_users = [];

        foreach ($users as $user) {
            array_pop($user);
            $user['full_name'] = $user['last_name']. $user['first_name'];
        
            if(! array_key_exists('age', $user)) {
                $user['age']=null;
            }
            // print_r($user);
            $new_users[] = $user;
        }

        print_r($new_users);
        return $new_users;
    }
}

(new Question())->main();
