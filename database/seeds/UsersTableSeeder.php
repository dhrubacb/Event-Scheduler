<?php


use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**UsersTableSeeder
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


                    DB::table('users')->insert(
                        array(
                               array(
					    			'name'=>'Dhruba',
					    			'email'=>'as@as.as',
					    			'password'=>  Hash::make('1234'),
					    			'contact'=>'01760',
					    			'dept_id'=>'1',
					    			'user_type'=>'1'
					    			),
                                array(
                                    'name'=>'Masum',
                                    'email'=>'masum@gmail.com',
                                    'password'=>  Hash::make('1234'),
                                    'contact'=>'01760',
                                    'dept_id'=>'1',
                                    'user_type'=>'3'
                                    )
                    ));

		}

}