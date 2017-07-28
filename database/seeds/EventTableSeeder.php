<?php


use Illuminate\Database\Seeder;


class EventTableSeeder extends Seeder
{
    /**UsersTableSeeder
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


                    DB::table('event')->insert(
                        array(
                               array(
					    			'title'=>'Bio Theory Final',
                                    'description'=>'asfdfsdafsd',
                                    'imagelink'=>'assignment',
                                    'counter_type'=>'0',
                                    'priority'=>'1',
                                    'status'=>'0',
                                    'start_time'=>'2017-01-01 13:00:00',
                                    'end_time'=>'2017-05-15 02:00:00',
                                    'user_id'=>'1',
                                    'offering_dept'=>'1',
                                    'accepting_dept'=>'1',
                                    'course_id'=>'1'
					    			),
                               array(
                                    'title'=>'DSP Exam',
                                    'description'=>'asfdfsdafsd',
                                    'imagelink'=>'assignment',
                                    'counter_type'=>'0',
                                    'priority'=>'1',
                                    'status'=>'0',
                                    'start_time'=>'2017-01-01 13:00:00',
                                    'end_time'=>'2017-05-15 02:00:00',
                                    'user_id'=>'1',
                                    'offering_dept'=>'1',
                                    'accepting_dept'=>'1',
                                    'course_id'=>'1'

                                    ),
                               array(
                                    'title'=>'Bio Theory Final',
                                    'description'=>'assignment',
                                    'imagelink'=>'assignment',
                                    'counter_type'=>'assignment',
                                    'priority'=>'assignment',
                                    'status'=>'assignment',
                                    'start_time'=>'assignment',
                                    'end_time'=>'assignment',
                                    'user_id'=>'assignment',
                                    'offering_dept'=>'assignment',
                                    'accepting_dept'=>'assignment',
                                    'course_id'=>'assignment',
                                    'imagelink'=>'assignment'

                                    ),
                               array(
                                    'title'=>'Bio Theory Final',
                                    'description'=>'assignment',
                                    'imagelink'=>'assignment',
                                    'counter_type'=>'assignment',
                                    'priority'=>'assignment',
                                    'status'=>'assignment',
                                    'start_time'=>'assignment',
                                    'end_time'=>'assignment',
                                    'user_id'=>'assignment',
                                    'offering_dept'=>'assignment',
                                    'accepting_dept'=>'assignment',
                                    'course_id'=>'assignment',
                                    'imagelink'=>'assignment'

                                    ),
                               array(
                                    'title'=>'Bio Theory Final',
                                    'description'=>'assignment',
                                    'imagelink'=>'assignment',
                                    'counter_type'=>'assignment',
                                    'priority'=>'assignment',
                                    'status'=>'assignment',
                                    'start_time'=>'assignment',
                                    'end_time'=>'assignment',
                                    'user_id'=>'assignment',
                                    'offering_dept'=>'assignment',
                                    'accepting_dept'=>'assignment',
                                    'course_id'=>'assignment',
                                    'imagelink'=>'assignment'

                                    ),
                               array(
                                    'title'=>'Bio Theory Final',
                                    'description'=>'assignment',
                                    'imagelink'=>'assignment',
                                    'counter_type'=>'assignment',
                                    'priority'=>'assignment',
                                    'status'=>'assignment',
                                    'start_time'=>'assignment',
                                    'end_time'=>'assignment',
                                    'user_id'=>'assignment',
                                    'offering_dept'=>'assignment',
                                    'accepting_dept'=>'assignment',
                                    'course_id'=>'assignment',
                                    'imagelink'=>'assignment'

                                    )
                    ));

		}

}