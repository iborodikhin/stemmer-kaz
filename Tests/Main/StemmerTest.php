<?php
namespace StemmerKaz\Tests\Main;

use StemmerKaz\Stemmer;

/**
 * Test for Stemmer class.
 */
class StemmerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Stemmer object for test.
     *
     * @var \StemmerKaz\Stemmer
     */
    protected $stemmer;

    /**
     * {@inheritdoc}
     */
    public function setUp()
    {
        $this->stemmer = new Stemmer();
    }

    /**
     * @dataProvider provideTestData
     * @param string $word
     * @param string $expected
     */
    public function testStemmer($word, $expected)
    {
        $actual = $this->stemmer->stemWord($word);

        $this->assertEquals($expected, $actual);
    }

    /**
     * Data-provider for test.
     *
     * @return array
     */
    public function provideTestData()
    {
        return [
            ['адамға', 'адам'],
            ['мұғалiмiмiзге', 'мұғалiмi'],
        ];
    }
}