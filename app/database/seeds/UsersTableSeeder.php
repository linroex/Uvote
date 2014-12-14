<?php
class UsersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        Users::createUser('林熙哲',583240501808325);
        UsersDetail::createUserData(1, 'https://fbcdn-sphotos-b-a.akamaihd.net/hphotos-ak-xpa1/v/t1.0-9/1463505_965484456798345_4712792847200495409_n.jpg?oh=4c34746e7c27f6127c36f6cb064c727b&oe=5500BD7C&__gda__=1427226433_27e870e299c6399699cf2e30d5dec60b', 'student', 'linroex@coder.tw', 'linroex@coder.tw', '四資管二');
        Users::createUser('張搏凱',312380888967855);
        UsersDetail::createUserData(2, 'https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xfp1/v/t1.0-1/c15.0.50.50/p50x50/10354686_10150004552801856_220367501106153455_n.jpg?oh=35ba05f02f8c0fdf74b08b805663797f&oe=550D022F&__gda__=1427223769_ad7d3138dd88143c511e95f09672a1e0', 'offical', 'pkg@pokaichang.com', 'pkg@pokaichang.com', '四電資三');
    }

}
