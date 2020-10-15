$(function (){
    $(".tags_select_choose").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    });
    $(".select2_init").select2({
        placeholder: "Chọn  danh mục",
        allowClear: true
    })

    tinymce.init({
            selector: "textarea.timymce",
            plugins: [
                "image imagetool",
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic |alignleft aligncenter alignright alignjustify | bullist numlist outdent indent |image",
    file_picker_callback: function (callback, value, meta) {
        let x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        let y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        let type = 'image' === meta.filetype ? 'Images' : 'Files',
            url  = '/laravel-filemanager?editor=tinymce5&type=' + type;

        tinymce.activeEditor.windowManager.openUrl({
            url : url,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            onMessage: (api, message) => {
                callback(message.content);
            }
        });
    }
});
})
