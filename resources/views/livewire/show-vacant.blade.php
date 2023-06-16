<div class="p-10">
    <div class="mb-5">
        <h3 class="font-bold text-3xl text-gray-800 my-3">
            {{ $vacant->title }}
        </h3>
        <div class="grid grid-cols-2 bg-gray-50 p-4">
            <p class="font-bold text-sm uppercase text-gray-800 my-3">Empresa:
                <span class="text-gray-700 normal-case font-light">{{ $vacant->company }}</span>
            </p>
            <p class="font-bold text-sm uppercase text-gray-800 my-3">Último día para postular:
                <span class="text-gray-700 normal-case font-normal">{{ $vacant->apply_deadline->toFormattedDateString() }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">Salario:
                <span class="text-gray-700 normal-case font-normal">{{ $vacant->salary->salary }}</span>
            </p>

            <p class="font-bold text-sm uppercase text-gray-800 my-3">Categoría:
                <span class="text-gray-700 normal-case font-normal">{{ $vacant->category->category }}</span>
            </p>
            
            <p class="text-gray-700 text-base">
                {{ $vacant->job_description }}
            </p>
        </div>
    </div>
</div>
