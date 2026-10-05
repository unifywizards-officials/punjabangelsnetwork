<?php

namespace App\Rules;
use Illuminate\Contracts\Validation\Rule;
use App\Models\Page;
use Closure;

class UniquePageCombination implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    protected $pageId;

    public function __construct($pageId)
    {
        $this->pageId = $pageId;
    }

    public function passes($attribute, $value)
    {
        // Get the current page record
        $currentPage = Page::find($this->pageId);

        // Check if any other page with the same page_type and slug exists
        $existingPage = Page::where('page_type', $currentPage->page_type)
                            ->where('slug', $value)
                            ->where('id', '<>', $this->pageId)
                            ->exists();

        return !$existingPage;
    }

    public function message()
    {
        return 'The combination of page type and slug must be unique.';
    }
}
