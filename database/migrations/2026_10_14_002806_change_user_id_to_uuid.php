
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement('ALTER TABLE public."user" ADD COLUMN id_uuid UUID');

        DB::statement('UPDATE public."user" SET id_uuid = gen_random_uuid()');

        DB::statement('ALTER TABLE public."user" ALTER COLUMN id_uuid SET NOT NULL');

        DB::statement('ALTER TABLE public."user" DROP CONSTRAINT user_pkey');

        DB::statement('ALTER TABLE public."user" RENAME COLUMN id TO id_lama');

        DB::statement('ALTER TABLE public."user" RENAME COLUMN id_uuid TO id');

        DB::statement('ALTER TABLE public."user" ADD CONSTRAINT user_pkey PRIMARY KEY (id)');

        DB::statement('ALTER TABLE public."user" ALTER COLUMN id SET DEFAULT gen_random_uuid()');
    }

    public function down(): void
    {
        DB::statement('ALTER TABLE public."user" DROP CONSTRAINT user_pkey');

        DB::statement('ALTER TABLE public."user" DROP COLUMN id');

        DB::statement('ALTER TABLE public."user" RENAME COLUMN id_lama TO id');

        DB::statement('ALTER TABLE public."user" ADD CONSTRAINT user_pkey PRIMARY KEY (id)');
    }
};