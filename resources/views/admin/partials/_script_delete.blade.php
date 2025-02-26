




<script>
    $('#category_delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var category_id = button.data('category_id')
        var modal = $(this)

        var url = '{{ route("category.destroy", ":id") }}'
        url = url.replace(':id', category_id);
        document.getElementById("category-action").action = url;
        modal.find('.category-action').val(url);
    })
</script>



<script>
    $('#sub_category_delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var sub_category_id = button.data('sub_category_id')
        var modal = $(this)

        var url = '{{ route("subcategory.destroy", ":id") }}'
        url = url.replace(':id', sub_category_id);
        document.getElementById("subcategory-action").action = url;
        modal.find('.subcategory-action').val(url);
    })
</script>




<script>
    $('#content_delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var content_id = button.data('content_id')
        var modal = $(this)
        var url = '{{ route("package.content.destroy", ":id") }}'
        url = url.replace(':id', content_id);
        document.getElementById("content-action").action = url;
        modal.find('.content-action').val(url);
    })
</script>


<script>
    $('#itinerary_delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var itinerary_id = button.data('itinerary_id')
        var modal = $(this)
        var url = '{{ route("itineraries.destroy", ":id") }}'
        url = url.replace(':id', itinerary_id);
        document.getElementById("itinerary-action").action = url;
        modal.find('.itinerary-action').val(url);
    })
</script>


<script>
    $('#accommodation_delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var accommodation_id = button.data('accommodation_id')
        var modal = $(this)
        var url = '{{ route("accommodations.destroy", ":id") }}'
        url = url.replace(':id', accommodation_id);
        document.getElementById("accommodation-action").action = url;
        modal.find('.accommodation-action').val(url);
    })
</script>


<script>
    $('#addon_delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var addon_id = button.data('addon_id')
        var modal = $(this)
        var url = '{{ route("addons.destroy", ":id") }}'
        url = url.replace(':id', addon_id);
        document.getElementById("addon-action").action = url;
        modal.find('.addon-action').val(url);
    })
</script>
<script>
    $('#Program_delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var Program_id = button.data('program_id')
        var modal = $(this)
        var url = '{{ route("programs.destroy", ":id") }}'
        url = url.replace(':id', Program_id);
        document.getElementById("Program-action").action = url;
        modal.find('.Program-action').val(url);
    })
</script>

<script>
    $('#blog_delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var blog_id = button.data('blog_id')
        var modal = $(this)
        var url = '{{ route("blogs.destroy", ":id") }}'
        url = url.replace(':id', blog_id);
        document.getElementById("blog-action").action = url;
        modal.find('.blog-action').val(url);
    })
</script>

<script>
    $('#media_program_delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var media_program_id = button.data('media_program_id')
        var modal = $(this)
        var url = '{{ route("media.destroy", ":id") }}'
        url = url.replace(':id',media_program_id);
        document.getElementById("media_program-action").action = url;
        modal.find('.media_program-action').val(url);
    })
</script>

<script>
    $('#faq_delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var faq_id = button.data('faq_id')
        var modal = $(this)
        var url = '{{ route("faqs.destroy", ":id") }}'
        url = url.replace(':id', faq_id);
        document.getElementById("faq-action").action = url;
        modal.find('.faq-action').val(url);
    })
</script>

<script>
    $('#promo_delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var promo_id = button.data('promo_id')
        var modal = $(this)
        var url = '{{ route("promo.destroy", ":id") }}'
        url = url.replace(':id', promo_id);
        document.getElementById("promo-action").action = url;
        modal.find('.promo-action').val(url);
    })
</script>


<script>
    $('#booking_delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var booking_id = button.data('booking_id')
        var modal = $(this)
        var url = '{{ route("programs.booking.delete", ":id") }}'
        url = url.replace(':id', booking_id);
        document.getElementById("booking-action").action = url;
        modal.find('.booking-action').val(url);
    })
</script>

<script>
    $('#message_delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var message_id = button.data('message_id')
        var modal = $(this)
        var url = '{{ route("messages.destroy", ":id") }}'
        url = url.replace(':id', message_id);
        document.getElementById("message-action").action = url;
        modal.find('.message-action').val(url);
    })
</script>


<script>
    $('#tailor_delete').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var tailor_id = button.data('tailor_id')
        var modal = $(this)
        var url = '{{ route("tailors.destroy", ":id") }}'
        url = url.replace(':id', tailor_id);
        document.getElementById("tailor-action").action = url;
        modal.find('.tailor-action').val(url);
    })
</script>
