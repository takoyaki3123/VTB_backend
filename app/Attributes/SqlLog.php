<?
namespace App\Attributes;

use Attribute;
use Illuminate\Support\Facades\Log;

#[Attribute(Attribute::TARGET_FUNCTION)]
class SqlLogAttribute {
    public function __construct(
        public readonly string $methodName,
        private string $tableName,
        private string $updateContent,
    )
    {
    }

    public function insert() {
        Log::info("insert to {$this->tableName}: { {$this->updateContent} }");
    }

    public function update() {
        Log::info("update {$this->tableName}: { {$this->updateContent} }");
    }

    public function delete() {
        Log::info("delete {$this->tableName}: { {$this->updateContent} }");
    }
}
