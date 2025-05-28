#!/bin/bash

echo "Creating Laravel Model with related classes..."

# Define model name
MODEL_NAME="Admin/SubMenu"

# Run Artisan commands
php artisan make:model $MODEL_NAME -m
php artisan make:controller Admin/Controllers/SubMenuController --model=$MODEL_NAME
php artisan make:factory $MODEL_NAMEFactory --model=$MODEL_NAME
php artisan make:seeder $MODEL_NAMESeeder
php artisan make:policy $MODEL_NAMEPolicy --model=$MODEL_NAME
php artisan make:request $MODEL_NAMERequest

echo "Model setup completed!"
