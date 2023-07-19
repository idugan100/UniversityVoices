<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\UsageLog;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewCourseTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_course_view()
    {
        $usage_log= new UsageLog();
        $usage_log->save();
        $response = $this->get('/courses');

        $response->assertStatus(200);
    }

    public function test_course_usage_tracking()
    {
        $usage_log= new UsageLog();
        $usage_log->save();
        $response = $this->get('/courses');


        $this->assertSame(1,UsageLog::where("created_at",now())->first()->course_views);
    }
}