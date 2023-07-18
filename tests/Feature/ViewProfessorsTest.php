<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\UsageLog;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewProfessorsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_professor_view()
    {
        $usage_log= new UsageLog();
        $usage_log->save();
        $response = $this->get('/professors');

        $response->assertStatus(200);
    }

    public function test_professor_usage_tracking()
    {
        $usage_log= new UsageLog();
        $usage_log->save();
        $response = $this->get('/professors');


        $this->assertSame(1,UsageLog::where("created_at",now())->first()->professor_views);
    }
}
