<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\ScamType;
use App\Models\Country;
use App\Models\State;
use App\Models\Gender;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_scams', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(ScamType::class)->cascadeOnUpdate()->cascadeOnDelete();
            $table->boolean('is_in_progress')->default(false);
            $table->longText('scam_message')->nullable();
            $table->date('date_of_first_contact')->nullable();

            $table->string('scammer_name')->nullable();
            $table->string('scammer_phone_number')->nullable();
            $table->string('scammer_email')->nullable();
            $table->foreignId('scammer_gender_id')->nullable()->constrained('genders')->cascadeOnUpdate()->nullOnDelete();
            $table->string('scammer_address')->nullable();
            $table->foreignId('scammer_country_id')->nullable()->constrained('countries')->cascadeOnUpdate()->nullOnDelete();
            $table->foreignId('scammer_state_id')->nullable()->constrained('states')->cascadeOnUpdate()->nullOnDelete();

            $table->string('reporter_name')->nullable();
            $table->string('reporter_phone_number')->nullable();
            $table->string('reporter_email')->nullable();
            $table->foreignId('reporter_gender_id')->constrained('genders');
            $table->string('reporter_age')->nullable();
            $table->string('reporter_address')->nullable();
            $table->foreignId('reporter_country_id')->nullable()->constrained('countries');
            $table->foreignId('reporter_state_id')->nullable()->constrained('states');

            $table->string('reporter_user_agent')->nullable();
            $table->macAddress('reporter_device')->nullable();
            $table->ipAddress('reporter_ip_address')->nullable();
            $table->point('reporter_geo_position')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('report_scams');
    }
};
