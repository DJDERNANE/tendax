@extends('layouts.storelayout')

@section('title', 'Dcuments')

@section('styling')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/allDocuments.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
@endsection
@section('content')
    <div class="mt-5 pt-5">
       

        <!-- start button scroll to top -->

        <button class="scroll-top" id="scrollToTopBtn">
            <i class="bi bi-arrow-up"></i>
        </button>

        <!-- end button scroll to top -->



        <!-- start documents page head -->

        <div class="documents-head page-head">
            <div class="container">
                <div class="page-head-wrapper">
                    <h2 class="page-head-title">documents</h2>
                    <div class="serach-upload">
                        <div class="search">
                            <form class="form-search">
                                <input class="form-control" type="search" placeholder="Recherche..." aria-label="Search">
                                <button class="btn btn-search" type="submit">
                                    <i class="bi bi-search"></i>
                                </button>
                            </form>
                        </div>
                        <a href="uploadDocument.html" class="upload-link">
                            <i class="bi bi-upload"></i>
                            <span>importer</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- end documents page head -->



        <!-- start section : specifications -->

        <section class="specifications">
            <div class="container">
                <h3 class="section-title specifications-title">cahier des charges</h3>
                <div class="row">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="allDocuments.html" class="box-document-folder-link">
                            <i class="bi bi-folder2-open"></i>
                            <h6 class="domaine-name">nom domaine</h6>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="" class="box-document-folder-link">
                            <i class="bi bi-folder2-open"></i>
                            <h6 class="domaine-name">nom domaine</h6>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="" class="box-document-folder-link">
                            <i class="bi bi-folder2-open"></i>
                            <h6 class="domaine-name">nom domaine</h6>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="" class="box-document-folder-link">
                            <i class="bi bi-folder2-open"></i>
                            <h6 class="domaine-name">nom domaine</h6>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="" class="box-document-folder-link">
                            <i class="bi bi-folder2-open"></i>
                            <h6 class="domaine-name">nom domaine</h6>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="" class="box-document-folder-link">
                            <i class="bi bi-folder2-open"></i>
                            <h6 class="domaine-name">nom domaine</h6>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="" class="box-document-folder-link">
                            <i class="bi bi-folder2-open"></i>
                            <h6 class="domaine-name">nom domaine</h6>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="" class="box-document-folder-link">
                            <i class="bi bi-folder2-open"></i>
                            <h6 class="domaine-name">nom domaine</h6>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="" class="box-document-folder-link">
                            <i class="bi bi-folder2-open"></i>
                            <h6 class="domaine-name">nom domaine</h6>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="" class="box-document-folder-link">
                            <i class="bi bi-folder2-open"></i>
                            <h6 class="domaine-name">nom domaine</h6>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="" class="box-document-folder-link">
                            <i class="bi bi-folder2-open"></i>
                            <h6 class="domaine-name">nom domaine</h6>
                        </a>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <a href="" class="box-document-folder-link">
                            <i class="bi bi-folder2-open"></i>
                            <h6 class="domaine-name">nom domaine</h6>
                        </a>
                    </div>
                </div>
                <a href="{{route('domains.index')}}" class="view-more">
                    <span>voir plus</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </section>

        <!-- end section : specifications -->



        <!-- start section : useful-documents -->

        <section class="useful-documents">
            <div class="container">
                <h3 class="section-title useful-documents-title">documents utiles</h3>
                <div class="row">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="documentDetails.html" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share" data-bs-toggle="tooltip" data-bs-placement="top"data-bs-custom-class="custom-tooltip" data-bs-title="Partager">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download" data-bs-toggle="tooltip" data-bs-placement="top"data-bs-custom-class="custom-tooltip" data-bs-title="Télécharger">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print" data-bs-toggle="tooltip" data-bs-placement="top"data-bs-custom-class="custom-tooltip" data-bs-title="Imprimer">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link" data-bs-toggle="tooltip" data-bs-placement="top"data-bs-custom-class="custom-tooltip" data-bs-title="Lire">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{route('documents.all')}}" class="view-more">
                    <span>voir plus</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </section>

        <!-- end section : useful-documents -->



        <!-- start section : administrative-monitoring -->

        <section class="administrative-monitoring">
            <div class="container">
                <h3 class="section-title administrative-monitoring-title">veille administratifs</h3>
                <div class="row">
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share" data-bs-toggle="tooltip" data-bs-placement="top"data-bs-custom-class="custom-tooltip" data-bs-title="Partager">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download" data-bs-toggle="tooltip" data-bs-placement="top"data-bs-custom-class="custom-tooltip" data-bs-title="Télécharger">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print" data-bs-toggle="tooltip" data-bs-placement="top"data-bs-custom-class="custom-tooltip" data-bs-title="Imprimer">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link" data-bs-toggle="tooltip" data-bs-placement="top"data-bs-custom-class="custom-tooltip" data-bs-title="Lire">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="box-document">
                            <a href="" class="document-link">
                                <div class="paper-folded">
                                    <img src="images/document-face.jpg" alt="" class="document-face-thumbnail">
                                </div>
                                <h6 class="document-name">nom de document</h6>
                            </a>
                            <div class="document-actions">
                                <div class="btns-wrapper">
                                    <button class="btn-action btn-share">
                                        <i class="bi bi-share"></i>
                                    </button>
                                    <button class="btn-action btn-download">
                                        <i class="bi bi-download"></i>
                                    </button>
                                    <button class="btn-action btn-print">
                                        <i class="bi bi-printer"></i>
                                    </button>
                                </div>
                                <a href="" class="view-document-link">
                                    <i class="bi bi-book"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{route('documents.all')}}" class="view-more">
                    <span>voir plus</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </section>

    </div>

@endsection
