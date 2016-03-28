<?php

use Illuminate\Database\Seeder;

class VerifiedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

/*
 * <<<<<<------------------------------------------------>>>>>>
 * <<<<<<----INSERCION DE ADMINISTRADORES VERIFICADOS---->>>>>>
 * <<<<<<------------------------------------------------>>>>>>
 */
        \DB::table('verifiedTeachers')->insertGetId([
            'teacher_id' => 1,
            'admin_id' => 1,
            'created_at' => date('YmdHms')
        ]);
        \DB::table('verifiedTeachers')->insertGetId([
            'teacher_id' => 2,
            'admin_id' => 1,
            'created_at' => date('YmdHms')
        ]);
        \DB::table('verifiedTeachers')->insertGetId([
            'teacher_id' => 3,
            'admin_id' => 1,
            'created_at' => date('YmdHms')
        ]);
        \DB::table('verifiedTeachers')->insertGetId([
            'teacher_id' => 4,
            'admin_id' => 3,
            'created_at' => date('YmdHms')
        ]);
        \DB::table('verifiedTeachers')->insertGetId([
            'teacher_id' => 5,
            'admin_id' => 2,
            'created_at' => date('YmdHms')
        ]);
        \DB::table('verifiedTeachers')->insertGetId([
            'teacher_id' => 6,
            'admin_id' => 4,
            'created_at' => date('YmdHms')
        ]);

/*
 * <<<<<<------------------------------------------------>>>>>>
 * <<<<<<-------INSERCION DE PROFESORES VERIFICADOS------>>>>>>
 * <<<<<<------------------------------------------------>>>>>>
 */
        \DB::table('verifiedTeachers')->insertGetId([
            'teacher_id' => 7,
            'admin_id' => 5,
            'created_at' => date('YmdHms')
        ]);
        \DB::table('verifiedTeachers')->insertGetId([
            'teacher_id' => 8,
            'admin_id' => 6,
            'created_at' => date('YmdHms')
        ]);
        \DB::table('verifiedTeachers')->insertGetId([
            'teacher_id' => 9,
            'admin_id' => 1,
            'created_at' => date('YmdHms')
        ]);
        \DB::table('verifiedTeachers')->insertGetId([
            'teacher_id' => 10,
            'admin_id' => 2,
            'created_at' => date('YmdHms')
        ]);
        \DB::table('verifiedTeachers')->insertGetId([
            'teacher_id' => 11,
            'admin_id' => 4,
            'created_at' => date('YmdHms')
        ]);
        \DB::table('verifiedTeachers')->insertGetId([
            'teacher_id' => 12,
            'admin_id' => 3,
            'created_at' => date('YmdHms')
        ]);

/*
 * <<<<<<------------------------------------------------>>>>>>
 * <<<<<<-------INSERCION DE PROFESORES VERIFICADOS------>>>>>>
 * <<<<<<------------------------------------------------>>>>>>
 */
        \DB::table('verifiedStudents')->insertGetId([
            'teacher_id' => 1,
            'admin_id' => 5,
            'created_at' => date('YmdHms')
        ]);
        \DB::table('verifiedStudents')->insertGetId([
            'teacher_id' => 2,
            'admin_id' => 6,
            'created_at' => date('YmdHms')
        ]);
        \DB::table('verifiedStudents')->insertGetId([
            'teacher_id' => 3,
            'admin_id' => 1,
            'created_at' => date('YmdHms')
        ]);
        \DB::table('verifiedStudents')->insertGetId([
            'teacher_id' => 4,
            'admin_id' => 2,
            'created_at' => date('YmdHms')
        ]);
        \DB::table('verifiedStudents')->insertGetId([
            'teacher_id' => 5,
            'admin_id' => 4,
            'created_at' => date('YmdHms')
        ]);
        \DB::table('verifiedStudents')->insertGetId([
            'teacher_id' => 6,
            'admin_id' => 3,
            'created_at' => date('YmdHms')
        ]);
    }
}
