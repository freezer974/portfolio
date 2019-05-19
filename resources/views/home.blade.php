@extends('layouts.app')
@section('content')
    <div class="site-wrapper">
        <div class="site-wrapper-inner text-white text-center">
            <i class="fas fa-spinner fa-pulse fa-4x"></i>
        </div>
    </div>
    <main class="container-fluid">
        @if(session('updated'))
            <div class="alert alert-dark" role="alert">
                {{ session('updated') }}
            </div>
        @endif
        @isset($user)
            <h2 class="text-title mb-3">{{ __('Travaux de ') . $user->name }}</h2>
        @else
            <h2 class="text-title mb-3">@lang('Mes travaux')
            @isset($category)
                • <span class="text-title mb-3 text-info">@lang($category->name)</span>
            @endif
            @isset($album)
                • <span class="text-title mb-3 text-info">@lang($album->name)</span>
            @endif
            </h2>
        @endif

        @if ($images->count() > 0)
            <div class="d-flex justify-content-center">
                {{ $images->onEachSide(2)->links() }}
            </div>
            <div class="card-columns">
                @foreach($images as $image)
                    <div class="card" id="image{{ $image->id }}">
                        <a href="{{ url('images/' . $image->name) }}" class="image-link" data-link="{{ route('image.click', $image->id) }}" data-url="{{ $image->url }}" data-user="{{ $image->user->name }}" title="{{ $image->title }}">
                            <img class="card-img-top"
                                src="{{ url('thumbs/' . $image->name) }}"
                                alt="{{ $image->title }}">
                        </a>
                        <div class="card-body">
                            @isset($image->title)
                                <h5 class="card-title">{{ $image->title }}</h5>
                            @endisset
                            <p class="card-text">
                                <span class="description-image">{{ $image->description }}</span>
                                @isset($image->url)
                                    <em class="d-block"><a href="{{ $image->url}}" data-toggle="tooltip"
                                        title="{{ __('Voir ce site web') }}">Site web</a></em>
                                @endisset
                            </p>
                        </div>
                        @adminOrOwner($image->user_id)
                            <div class="card-footer text-muted">
                                <em>
                                    <a href="{{ route('user', $image->user->id) }}" data-toggle="tooltip"
                                        title="{{ __('Voir les photos de ') . $image->user->name }}">{{ $image->user->name }}</a>
                                </em>
                                <div class="float-right">
                                    <em>
                                        (<span class="image-click">{{ $image->clicks }}</span> {{ trans_choice(__('vue|vues'), $image->clicks) }})
                                        <span id="data-published" data-published="{{ $image->published_at->format('Y-m-d') }}">{{ ucwords($image->published_at->formatLocalized('%B %G')) }}</span>
                                    </em>
                                </div>

                                <div class="star-rating" id="{{ $image->id }}">
                                    <span class="float-right">
                                        <a class="toggleIcons" href="#">
                                            <i class="fa fa-cog"></i>
                                        </a>
                                        <span class="menuIcons" style="display: none">
                                            <a class="form-delete text-danger"
                                                href="{{ route('image.destroy', $image->id) }}"
                                                data-toggle="tooltip"
                                                title="@lang('Supprimer cette photo')">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            <a class="description-manage"
                                                href="{{ route('image.description', $image->id) }}"
                                                data-toggle="tooltip"
                                                title="@lang('Gérer la description')">
                                                <i class="fa fa-comment"></i>
                                            </a>
                                            <a class="albums-manage"
                                                href="{{ route('image.albums', $image->id) }}"
                                                data-toggle="tooltip"
                                                title="@lang('Gérer les albums')">
                                                <i class="fa fa-folder-open"></i>
                                            </a>
                                            <a class="category-edit"
                                                data-id="{{ $image->category_id }}"
                                                href="{{ route('image.update', $image->id) }}"
                                                data-toggle="tooltip"
                                                title="@lang('Changer de catégorie')">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a class="adult-edit"
                                                href="{{ route('image.adult', $image->id) }}"
                                                data-toggle="tooltip"
                                                title="@lang('Changer de statut')">
                                                <i class="fa @if($image->adult) fa-graduation-cap @else fa-child @endif"></i>
                                            </a>
                                        </span>
                                        <form action="{{ route('image.destroy', $image->id) }}" method="POST" class="hide">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </span>
                                </div>
                            </div>
                        @endadminOrOwner
                    </div>
                @endforeach
            </div>
        @else
            <h5 class="text-title">
                @lang("Il n'y a pas de travaux dans ") 
                @isset($category)
                    @lang($category->name)
                @endif
                @isset($album)
                    @lang($album->name)
                @endif
            </h5>
        @endif
    </main>
    <div class="modal fade" id="changeDescription" tabindex="-1" role="dialog" aria-labelledby="descriptionLabel"
     aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="descriptionLabel">@lang('Changement de la description')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="descriptionForm" action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="title" id="title">
                            <small class="invalid-feedback"></small>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="description" id="description">
                            <small class="invalid-feedback"></small>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="url" id="url">
                            <small class="invalid-feedback"></small>
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="published_at" id="published_at">
                            <small class="invalid-feedback"></small>
                        </div>
                        <div class="form-group{{ $errors->has('image') ? ' is-invalid' : '' }}">
                            <div class="custom-file">
                                <input type="file" id="image" name="image"
                                    class="{{ $errors->has('image') ? ' is-invalid ' : '' }}custom-file-input" >
                                <label class="custom-file-label" for="image">@lang('Choisir un fichier…')</label>
                                <small class="invalid-feedback"></small>
                            </div>
                            <br>
                        </div>
                        <div class="form-group">
                            <img id="preview" class="img-fluid" src="#" alt="">
                        </div>
                        <button type="submit" class="btn btn-primary">@lang('Envoyer')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="changeCategory" tabindex="-1" role="dialog" aria-labelledby="categoryLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="categoryLabel">@lang('Changement de la catégorie')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="editForm" action="" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <select class="form-control" name="category_id">
                                @foreach($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">@lang('Envoyer')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editAlbums" tabindex="-1" role="dialog" aria-labelledby="albumLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="albumLabel">@lang("Gestion des albums pour l'image")</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="manageAlbums" action="" method="POST">
                        <div class="form-group" id="listeAlbums"></div>
                        <button type="submit" class="btn btn-primary">@lang('Envoyer')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(() => {
            $('input[type="file"]').on('change', (e) => {
                let that = e.currentTarget
                if (that.files && that.files[0]) {
                    $(that).next('.custom-file-label').html(that.files[0].name)
                    let reader = new FileReader()
                    reader.onload = (e) => {
                        $('#preview').attr('src', e.target.result).removeClass('d-none');
                    }
                    reader.readAsDataURL(that.files[0])
                }
            })
            $('[rel="next"]').addClass('next')
            $('.site-wrapper').fadeOut(1000)

        })
        const swallAlertServer = () => {
                swal.fire({
                    title: '@lang("Il semble y avoir une erreur sur le serveur, veuillez réessayer plus tard...")',
                    type: 'warning'
                })
            }
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
        })
        $('a.description-manage').click((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            let src = that.parents('.card').find('.card-img-top').attr('src')
            $('#preview').attr('src', src)
            let title = that.parents('.card').find('.card-title').text()
            $('#title').val(title)
            let description = that.parents('.card').find('.card-text>.description-image').text()
            $('#description').val(description)
            let url = that.parents('.card').find('.card-text>em>a').attr('href')
            $('#url').val(url)
            let published_at = that.parents('.card').find('span#data-published').attr('data-published')
            $('#published_at').val(published_at)
            $('#descriptionForm').attr('action', that.attr('href')).find('input').removeClass('is-invalid').next().text()
            $('#changeDescription').modal('show')

        })
        $('#descriptionForm').submit((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)

            var formData = new FormData(that[0]);
            
            /* for (var [key, value] of formData.entries()) { 
                console.log(key, value);
            } */

            $.ajax({
                type: 'post',
                url: that.attr('action'),
                data: formData,
                cache: false,
                processData: false,
                contentType: false
            })
            .done((data) => {
                let card = $('#image' + data.id)
                let body = card.find('.card-body')
                let footer = card.find('.card-footer')
                if(body.length) {
                    if (data.name) {
                        if (card.find('img').length) {
                            card.children('a')
                                .attr('href', '{{ url("images" ) }}/' + data.name)
                                .find('img').attr('src','{{ url("thumbs") }}/' + data.name)
                        } else {
                            card.append('a')
                                .attr('href', '{{ url("images" ) }}' + data.name)
                                .append('img').attr('src','{{ url("thumbs") }}/' + data.name)
                        }
                    } else {
                        card.find('a').hide()
                    }
                    if (data.title) {
                        if (body.find('.card-title').length) {
                            body.find('.card-title').text(data.title).show()
                        } else {
                            body.prepend('<h5 class="card-title">' + data.title + '</h5>')
                        }
                    } else {
                        body.find('.card-title').hide()
                    }
                    if (data.description) {
                        if (body.children('.card-text').find('span.description-image').length)
                        {
                            body.children('.card-text').find('span.description-image').text(data.description).show()
                        } else {
                            body.children('.card-text').prepend('<span class="description-image">' + data.description + '</span>')
                        }
                    } else {
                        body.children('.card-text').find('span.description-image').hide()
                    }
                    if (data.url) {
                        if (body.children().find('em').length) {
                            body.children().find('em').show().children('a').attr('href', data.url)
                        } else {
                            body.children('.card-text').append('<em class="d-block"><a href="' + data.url + '" data-toggle="tooltip" title="@lang('Voir ce site web')">Site web</a></em>')
                        }
                    } else {
                        body.children().find('em').addClass('d-none').hide()
                    }
                    if (data.published_at) {
                        if (footer.children().find('span#data-published').length) {
                            var date = new Date(data.published_at);
                            footer.children().find('span#data-published').show().attr('data-published', date.toISOString().slice(0,10))
                            var mois = +date.toISOString().slice(5,7)
                            var annee = date.toISOString().slice(0,4)
                            var listeMois = ['','Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre']
                            footer.children().find('span#data-published').show().html(listeMois[mois] + ' ' + annee)
                        } else {
                            footer.children('.card-footer').append('<em class="d-block"><span id="data-published" data-published ="'+ data.published_at +'">' + data.published_at + '</span></em>')
                        }
                    } else {
                        footer.children().find('em').addClass('d-none').hide()
                    }
                } else {
                    card.children('a')
                        .attr('href', '{{ url("images" ) }}/' + data.name)
                        .append('img').attr('src','{{ url("thumbs") }}/' + data.name)
                        .parent()
                        .after('<div class="card-body"></div>')
                        .append('<h5 class="card-title">' + data.title + '</h5>')
                        .after('<p class="card-text"></p>')
                        .append('<span class="description-image">' + data.description + '</span>')
                        .after('<em class="d-block"><a href="' + data.url + '" data-toggle="tooltip" title="@lang('Voir ce site web')">Site web</a></em>')
                }
                $('#descriptionForm')[0].reset()
                $('#descriptionForm').find('label.custom-file-label').text("@lang('Choisir un fichier…')")
                $('#changeDescription').modal('hide')
            })
            .fail((data) => {
                console.log(data)
                if(data.status === 422) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $('#descriptionForm input[name=' + key + ']').addClass('is-invalid').parent().find('.invalid-feedback').text(value)
                    })
                } else {
                    swallAlertServer()
                }
            })
        })
        $('a.category-edit').click((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            $('select').val(that.attr('data-id'))
            $('#editForm').attr('action', that.attr('href'))
            $('#changeCategory').modal('show')
        })
        $('a.adult-edit').click((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            let icon = that.children()
            let adult = icon.hasClass('fa-graduation-cap')
            if(adult) {
                icon.removeClass('fa-graduation-cap')
            } else {
                icon.removeClass('fa-child')
            }
            icon.addClass('fa-cog fa-spin')
            adult = !adult
            $.ajax({
                method: 'put',
                url: that.attr('href'),
                data: { adult: adult }
            })
            .done(() => {
                that.tooltip('hide')
                let icon = that.children()
                icon.removeClass('fa-cog fa-spin')
                let card = that.parents('.card')
                if(adult) {
                    icon.addClass('fa-graduation-cap')
                    card.addClass('border-danger')
                } else {
                    icon.addClass('fa-child')
                    card.removeClass('border-danger')
                }
            })
            .fail(() => {
                swallAlertServer()
            })
        })
        $('a.albums-manage').click((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            that.tooltip('hide')
            that.children().removeClass('fa-folder-open').addClass('fa-cog fa-spin')
            e.preventDefault()
            $.get(that.attr('href'))
            .done((data) => {
                that.children().addClass('fa-folder-open').removeClass('fa-cog fa-spin')
                $('#listeAlbums').html(data)
                $('#manageAlbums').attr('action', that.attr('href'))
                $('#editAlbums').modal('show')
            })
            .fail(() => {
                that.children().addClass('fa-folder-open').removeClass('fa-cog fa-spin')
                swallAlertServer()
            })
        })
        $('#manageAlbums').submit((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            $.ajax({
                method: 'put',
                url: that.attr('action'),
                data: that.serialize()
            })
                .done((data) => {
                    if(data === 'reload') {
                        location.reload();
                    } else {
                        $('#editAlbums').modal('hide')
                    }
                })
                .fail(() => {
                    swallAlertServer()
                })
        })

        let memoStars = []
        $('.star-rating div').click((e) => {
            @auth
                let element = $(e.currentTarget)
                let values = element.attr('id').split('.')
                element.addClass('fa-spin')
                $.ajax({
                    url: "{{ url('rating') }}" + '/' + values[0],
                    type: 'PUT',
                    data: {value: values[1]}
                })
                .done((data) => {
                    if (data.status === 'ok') {
                        let image = $('#' + data.id)
                        memoStars = []
                        image.children('div')
                            .removeClass('star-yellow')
                            .each(function (index, element) {
                                if (data.value > 4 - index) {
                                    $(element).addClass('star-yellow')
                                    memoStars.push(true)
                                }
                                memoStars.push(false)
                            })
                            .end()
                            .find('span.count-number')
                            .text('(' + data.count + ')')
                        if(data.rate) {
                            if(data.rate == values[1]) {
                                title = '@lang("Vous avez déjà donné cette note !")'
                            } else {
                                title = '@lang("Votre vote a été modifié !")'
                            }
                        } else {
                            title = '@lang("Merci pour votre vote !")'
                        }
                        swal.fire({
                            title: title,
                            type: 'warning'
                        })
                    } else {
                        swal.fire({
                            title: '@lang('Vous ne pouvez pas voter pour vos photos !')',
                            type: 'error'
                        })
                    }
                    element.removeClass('fa-spin')
                })
                .fail(() => {
                    swallAlertServer()
                    element.removeClass('fa-spin')
                })
            @else
                swal.fire({
                    title: '@lang('Vous devez être connecté pour pouvoir voter !')',
                    type: 'error'
                })
            @endauth
        })
        $('.star-rating').hover(
            (e) => {
                memoStars = []
                $(e.currentTarget).children('div')
                    .each((index, element) => {
                        memoStars.push($(element).hasClass('star-yellow'))
                    })
                    .removeClass('star-yellow')
            }, (e) => {
            $.each(memoStars, (index, value) => {
                if(value) {
                    $(e.currentTarget).children('div:eq(' + index + ')').addClass('star-yellow')
                }
            })
        })
        $('a.image-link').click((e) => {
            e.preventDefault()
            let that = $(e.currentTarget)
            $.ajax({
                method: 'put',
                url: that.attr('data-link')
            }).done((data) => {
                if(data.increment) {
                    let numberElement = that.siblings('div.card-footer').find('.image-click')
                    numberElement.text(parseInt(numberElement.text()) + 1)
                }
            })
        })

        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip()
            $('.card-columns').magnificPopup({
                delegate: 'a.image-link',
                type: 'image',
                tLoading: '<i class="fas fa-spinner fa-pulse fa-2x"></i>  @lang("Chargement...")',
                tClose: '@lang("Fermer (Esc)")'@if($images->count() > 1),
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,1], // Will preload 0 - before current, and 1 after the current image
                    tCounter: '<span class="mfp-counter">%curr% @lang("sur") %total%</span>'
                },@endif
                image: {
                    tError: '<a href="%url%">@lang("L\'image #%curr%</a> n\'a pas pu être chargée.")',
                    titleSrc: function(item) {
                        let title = item.el.attr('title')
                            title += (item.el.attr('data-url'))? ' - <a href="' + item.el.attr('data-url') + '">@lang("Site web")</a>' : ''
                            title += '<small>@lang("de") ' + item.el.attr('data-user') + '</small>'
                        return title
                    }
                }
            })
            $('a.toggleIcons').click((e) => {
                e.preventDefault();
                let that = $(e.currentTarget)
                that.next().toggle('slow').end().children().toggleClass('fa-cog').toggleClass('fa-play')
            })
            $('a.form-delete').click((e) => {
                e.preventDefault();
                let href = $(e.currentTarget).attr('href')
                swal.fire({
                    title: '@lang('Vraiment supprimer cette photo ?')',
                    type: 'error',
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: '@lang('Oui')',
                    cancelButtonText: '@lang('Non')'
                }).then((result) => {
                    if (result.value) {
                        $("form[action='" + href + "'").submit()
                    }
                })
            })
        })
    </script>
@endsection
