<?php

namespace Tests\Unit;

use Tests\TestCase;


class PenjualanTest extends TestCase
{
    public function test_penjualan_page()
    {
        $response = $this->get('/api/penjualan');

        $response->assertStatus(200);
    }


    public function test_penjualan_store()
    {

    }


}
