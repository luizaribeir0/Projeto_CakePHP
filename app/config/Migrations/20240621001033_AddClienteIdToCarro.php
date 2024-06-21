<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddClienteIdToCarro extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('carro');
        $table->addColumn('cliente_id', 'integer', [
            'default' => null,
            'null' => true,
        ]);
        $table->addIndex(['cliente_id']);
        $table->addForeignKey('cliente_id', 'cliente', 'id', [
            'delete' => 'SET_NULL',
            'update' => 'NO_ACTION',
        ]);
        $table->update();
    }
}
