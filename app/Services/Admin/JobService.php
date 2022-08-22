<?php

namespace App\Services\Admin;

use App\Models\Job;
use Illuminate\Support\Str;

class JobService
{
    public function store($request)
    {
        Job::create([
            'name' => Str::title($request->name),
            'description' => $request->description,
        ]);
    }

    public function update($id, $request)
    {
        Job::find($id)->update([
            'name' => Str::title($request->name),
            'description' => $request->description,
        ]);
    }

    public function destroy($id)
    {
        Job::find($id)->delete($id);
    }
}
