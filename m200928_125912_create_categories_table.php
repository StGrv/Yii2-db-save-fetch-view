<?php
use yii\db\Migration;

class m200928_125912_create_categories_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('{{%categories}}', [
            
            'id' => $this->primaryKey(),
            'mark' => $this->string(100)->notNull(),
            'model' => $this->string(100)->notNull(),
            'engine' => $this->string(100)->Null(),
            'transmission' => $this->string(100)->Null(),
        
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%categories}}');
    }
    
} // End
