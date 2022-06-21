<?php

class Pages_test extends TestCase
{
	public function test_index()
	{
		$output = $this->request('GET', 'pages/index');
		$this->assertStringContainsString('<title>Home</title>', $output);
	}

	public function test_about()
	{
		$output = $this->request('GET', 'pages/about');
		$this->assertStringContainsString('<title>About</title>', $output);
	}

	public function test_tambah() {
		$pages = new Pages();

		$hasil = $pages->tambah(4,4);

		self::assertSame(8, $hasil);
	}
}
