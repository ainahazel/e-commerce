<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class SeedCustomersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
        	'first_name' => 'Milad', 
        	'last_name' => 'Dirani', 
        	'billing_address' => '1411 Ashburn st.', 
        	'city' => 'Winnipeg', 
        	'province' => 'Manitoba', 
        	'country' => 'Canada', 
        	'postal_code' => 'r4t2b8', 
        	'email_address' => 'milad-dirani@shaw.net', 
        	'phone_number' => '204-786-9007', 
        	'password' => 'mypass', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now()
        ]); 

        DB::table('customers')->insert([
        	'first_name' => 'Dawn', 
        	'last_name' => 'Baker', 
        	'billing_address' => '88 Hargrave Bay', 
        	'city' => 'Regina', 
        	'province' => 'Saskatchewan', 
        	'country' => 'Canada', 
        	'postal_code' => 'r5y6u8', 
        	'email_address' => 'dawn-baker@bellmts.com', 
        	'phone_number' => '309-446-9007', 
        	'password' => 'mypass', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now() 
        ]); 

        DB::table('customers')->insert([
        	'first_name' => 'Inna', 
        	'last_name' => 'Soldatkina', 
        	'billing_address' => '12 Abbots Cresent', 
        	'city' => 'Victoria', 
        	'province' => 'British Columbia', 
        	'country' => 'Canada', 
        	'postal_code' => 'r5y6u7', 
        	'email_address' => 'inna-solda@gmail.com', 
        	'phone_number' => '604-146-9007', 
        	'password' => 'mypass', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now() 
        ]); 

        DB::table('customers')->insert([
        	'first_name' => 'Alexandr', 
        	'last_name' => 'Pasko', 
        	'billing_address' => '43 Inkster st', 
        	'city' => 'Calgary', 
        	'province' => 'Alberta', 
        	'country' => 'Canada', 
        	'postal_code' => '35y6u7', 
        	'email_address' => 'alex-the-great@gmail.com', 
        	'phone_number' => '825-146-9007', 
        	'password' => 'mypass', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now() 
        ]); 

        DB::table('customers')->insert([
        	'first_name' => 'Rahwa', 
        	'last_name' => 'Mehreteab', 
        	'billing_address' => '11 Hudson Street', 
        	'city' => 'Toronto', 
        	'province' => 'Ontario', 
        	'country' => 'Canada', 
        	'postal_code' => 'e5y6u7', 
        	'email_address' => 'rahwa@mts.net', 
        	'phone_number' => '226-146-9107', 
        	'password' => 'mypass', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now() 
        ]); 

        DB::table('customers')->insert([
        	'first_name' => 'Akash', 
        	'last_name' => 'Bakshi', 
        	'billing_address' => '330 Nortmount Av', 
        	'city' => 'Windsor', 
        	'province' => 'Ontario', 
        	'country' => 'Canada', 
        	'postal_code' => 'e5y8u7', 
        	'email_address' => 'aCash-money@mts.net', 
        	'phone_number' => '226-146-9107', 
        	'password' => 'mypass', 
        	'created_at' => Carbon::now(), 
            'updated_at' => Carbon::now() 
        ]); 

    }
}
