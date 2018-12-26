<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\TriangleClassifier;

class TriangleClassifierTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTriangleClassifier()
    {
        $result = new TriangleClassifier();
        $this->assertEquals('tam giac deu', $result->classifier(2,2,2));
        $this->assertEquals('tam giac can', $result->classifier(2,3,2));
        $this->assertEquals('tam giac thuong', $result->classifier(2,3,4));
        $this->assertEquals('khong phai tam giac', $result->classifier(8,2,3));
        $this->assertEquals('khong phai tam giac', $result->classifier(-1,2,1));
        $this->assertEquals('khong phai tam giac', $result->classifier(0,1,1));

    }
}
