<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TbCategoriaInstituicaoFixture
 *
 */
class TbCategoriaInstituicaoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'tb_categoria_instituicao';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'cd_categoria_instituicao' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nm_categoria_instituicao' => ['type' => 'string', 'length' => 30, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['cd_categoria_instituicao'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'cd_categoria_instituicao' => 1,
            'nm_categoria_instituicao' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
