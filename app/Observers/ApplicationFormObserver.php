<?php

namespace App\Observers;

use App\Models\ApplicationForm;

class ApplicationFormObserver
{
    /**
     * Handle the ApplicationForm "saving" event.
     *
     * @param  \App\Models\ApplicationForm  $applicationForm
     * @return void
     */
    public function saving(ApplicationForm $applicationForm)
    {
        // If user forgot to fill the question field when updating the application form then it will return the old/original question
        if ($applicationForm->isDirty('question')) {
            if ($applicationForm->question == null) {
                $applicationForm->question = $applicationForm->getOriginal('question');
            }
        }
    }

    /**
     * Handle the ApplicationForm "created" event.
     *
     * @param  \App\Models\ApplicationForm  $applicationForm
     * @return void
     */
    public function created(ApplicationForm $applicationForm)
    {
    }

    /**
     * Handle the ApplicationForm "updated" event.
     *
     * @param  \App\Models\ApplicationForm  $applicationForm
     * @return void
     */
    public function updated(ApplicationForm $applicationForm)
    {
    }

    /**
     * Handle the ApplicationForm "deleted" event.
     *
     * @param  \App\Models\ApplicationForm  $applicationForm
     * @return void
     */
    public function deleted(ApplicationForm $applicationForm)
    {
        //
    }

    /**
     * Handle the ApplicationForm "restored" event.
     *
     * @param  \App\Models\ApplicationForm  $applicationForm
     * @return void
     */
    public function restored(ApplicationForm $applicationForm)
    {
        //
    }

    /**
     * Handle the ApplicationForm "force deleted" event.
     *
     * @param  \App\Models\ApplicationForm  $applicationForm
     * @return void
     */
    public function forceDeleted(ApplicationForm $applicationForm)
    {
        //
    }
}
