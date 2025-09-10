<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Document extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'type',
        'file_path',
        'file_name',
        'file_size',
        'mime_type',
        'download_count',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'download_count' => 'integer',
        'sort_order' => 'integer',
    ];

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('title');
    }

    // Accessors
    public function getFileUrlAttribute()
    {
        return Storage::url($this->file_path);
    }

    public function getFormattedFileSizeAttribute()
    {
        if (!$this->file_size) return 'N/A';

        $bytes = (int) $this->file_size;
        $units = ['B', 'KB', 'MB', 'GB'];

        for ($i = 0; $bytes > 1024 && $i < count($units) - 1; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }

    public function getTypeDisplayAttribute()
    {
        $types = [
            'brochure' => 'Brochure',
            'fiche_technique' => 'Fiche technique',
            'catalogue' => 'Catalogue',
            'guide' => 'Guide',
            'autre' => 'Autre',
        ];

        return $types[$this->type] ?? 'Inconnu';
    }

    // Methods
    public function incrementDownloadCount()
    {
        $this->increment('download_count');
    }
}
