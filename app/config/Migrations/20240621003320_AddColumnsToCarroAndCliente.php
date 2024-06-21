<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class AddColumnsToCarroAndCliente extends AbstractMigration
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
        // Adicionar coluna `totalmente_pago` na tabela `carro`
        $table = $this->table('carro');
        $table->addColumn('totalmente_pago', 'integer', [
            'default' => 0,
            'limit' => 1,
            'null' => false,
        ]);
        $table->update();

        // Adicionar colunas `devedor` e `pagou_tudo` na tabela `cliente`
        $table = $this->table('cliente');
        $table->addColumn('devedor', 'integer', [
            'default' => 0,
            'limit' => 1,
            'null' => false,
        ]);
        $table->addColumn('pagou_tudo', 'integer', [
            'default' => 0,
            'limit' => 1,
            'null' => false,
        ]);
        $table->update();
    }
}
