<script>
    $("title").text("Shop");
</script>
<div class="flex">
    <div class="mx-auto mt-5">
        <form method="POST" enctype="multipart/form-data">
            <div>Hello world</div>
            <div class="w-[400px] relative border-2 border-gray-300 border-dashed rounded-lg p-6" id="dropzone">
                <div class="text-center" id='icon-upload'>
                    <img class="mx-auto h-12 w-12" src="https://www.svgrepo.com/show/357902/image-upload.svg" alt="">

                    <h3 class="mt-2 text-sm font-medium text-gray-900">
                        <label for="file_upload" class="relative cursor-pointer">
                            <span>Drag and drop</span>
                            <span class="text-indigo-600"> or browse</span>
                            <span>to upload</span>
                            <input id="file_upload" name="file_upload" type="file" class="sr-only">
                        </label>
                    </h3>
                    <p class="mt-1 text-xs text-gray-500">
                        PNG, JPG, GIF up to 10MB
                    </p>
                </div>

                <img src="" class="mt-4 mx-auto max-h-40 hidden" id="preview">
            </div>
            <input type="text" name='cmd'>
            <button type="submit" class="bg-blue-600 p-2 mt-2 text-white rounded">Submit</button>
        </form>
    </div>
</div>

<script>
    var dropzone = document.getElementById('dropzone');

    dropzone.addEventListener('dragover', e => {
        e.preventDefault();
        dropzone.classList.add('border-indigo-600');
    });

    dropzone.addEventListener('dragleave', e => {
        e.preventDefault();
        dropzone.classList.remove('border-indigo-600');
    });

    dropzone.addEventListener('drop', e => {
        e.preventDefault();
        dropzone.classList.remove('border-indigo-600');
        var file = e.dataTransfer.files[0];
        displayPreview(file);
    });

    var input = document.getElementById('file_upload');

    input.addEventListener('change', e => {
        var file = e.target.files[0];
        displayPreview(file);
    });

    displayPreview = (file) => {
        var reader = new FileReader();
        reader.readAsDataURL(file);
        reader.onload = () => {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
            $('#icon-upload').addClass('hidden');
            preview.classList.remove('hidden');
        };
    }
</script>