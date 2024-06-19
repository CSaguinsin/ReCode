<form wire:submit.prevent="save">
    <div class="max-w-screen-xl mx-auto pt-[8px] pb-[5rem]">
        <div class="border-[#303030] w-[1127px] h-[586px] text-[24px] font-sans p-4 text-white rounded-lg bg-transparent dark:bg-transparent outline-none">
            {{-- first section --}}
            <section class="pb-[40px]">
                <div class="pt-[16px]">
                    <input wire:model="title" label="Title" placeholder="Title" type="text" id="large-input"
                        class="text-[48px] w-[1127px] px-[24px]  font-bold last:block p-4 text-white rounded-lg bg-transparent dark:bg-transparent outline-black">
                </div>

                <div class="pt-[16px]">
                    <input wire:model="language" label="Title" placeholder="Programming Language" type="text" id="large-input"
                        class="w-[1127px] px-[24px]  text-[32px] font-semibold last:block  p-4 text-white rounded-lg bg-transparent dark:bg-transparent outline-none">
                </div>
            </section>
            {{-- end of section --}}

            {{-- second section --}}
            <div>
                <div id="quill-editor" class="mb-3" style="height: 300px;"></div>
                <input type="hidden" wire:model.defer="description" id="quill-editor-content">
            </div>
            <div class="pt-10">
                <button type="submit"
                    class="text-black font-semibold w-[347px] h-[46px] bg-[#21E8E6] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-4 py-[14px]  text-center inline-block">Add
                </button>
            </div>
        </div>
    </div>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (document.getElementById('quill-editor')) {
            var editor = new Quill('#quill-editor', {
                theme: 'snow'
            });
            var quillContentInput = document.getElementById('quill-editor-content');
            editor.on('text-change', function() {
                quillContentInput.value = editor.root.innerHTML;
                // Trigger input event for Livewire
                quillContentInput.dispatchEvent(new Event('input'));
            });

            quillContentInput.addEventListener('input', function() {
                editor.root.innerHTML = quillContentInput.value;
            });
        }
    });
</script>
