@extends('layouts.index2')

@section('content')


<style>
    /* Page Layout */
    .journal-page {
        padding: 60px 20px;
        background: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
        min-height: 100vh;
    }

    .page-title {
        text-align: center;
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 50px;
        color: #2c3e50;
        letter-spacing: 1px;
    }

    /* Grid */
    .journals-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
    }

    /* Journal Card */
    .journal-card {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        display: flex;
        flex-direction: column;
    }

    .journal-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 45px rgba(0, 0, 0, 0.15);
    }

    /* Cover Image */
    .journal-cover {
        width: 100%;
        height: 200px;
        background-size: cover;
        background-position: center;
        border-bottom: 2px solid #007bff;
        transition: transform 0.4s ease;
    }

    .journal-card:hover .journal-cover {
        transform: scale(1.05);
    }

    /* Info */
    .journal-info {
        padding: 20px;
        text-align: left;
    }

    .journal-info h3 {
        font-size: 22px;
        margin-bottom: 8px;
        color: #34495e;
    }

    .journal-info .author {
        font-size: 16px;
        color: #7f8c8d;
        margin-bottom: 15px;
    }

    /* Download Button */
    .download-btn {
        display: inline-block;
        padding: 10px 20px;
        background: #007bff;
        color: #fff;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        font-size: 15px;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    .download-btn:hover {
        background: #0056b3;
        transform: scale(1.05);
    }

    /* Pagination */
    .pagination-wrapper {
        margin-top: 40px;
        display: flex;
        justify-content: center;
    }

    /* No Journals */
    .no-journals {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 80px 20px;
    }

    .no-journals-card {
        text-align: center;
        background: #fff;
        padding: 60px 40px;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        width: 100%;
        transition: transform 0.3s ease;
    }

    .no-journals-card:hover {
        transform: translateY(-5px);
    }

    .no-journals-image {
        width: 150px;
        margin-bottom: 25px;
    }

    .no-journals-card h2 {
        font-size: 30px;
        color: #2c3e50;
        margin-bottom: 12px;
    }

    .no-journals-card p {
        font-size: 16px;
        color: #7f8c8d;
    }


    /* Wrapper */
    .search-wrapper {
        width: 100%;
        display: flex;
        justify-content: center;
        margin: 40px 0;
    }

    /* Search Bar */
    .search-bar {
        width: 100%;
        max-width: 600px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 60px;
        display: flex;
        align-items: center;
        padding: 6px 8px 6px 16px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        transition: all 0.35s ease;
        backdrop-filter: blur(12px);
    }

    /* Hover & Focus Effect */
    .search-bar:focus-within {
        box-shadow: 0 20px 50px rgba(0, 123, 255, 0.25);
        transform: translateY(-2px);
    }

    /* Search Icon */
    .search-icon {
        font-size: 18px;
        color: #999;
        margin-right: 10px;
    }

    /* Input */
    .search-bar input {
        border: none;
        outline: none;
        flex: 1;
        font-size: 15px;
        padding: 12px 10px;
        background: transparent;
        color: #333;
    }

    .search-bar input::placeholder {
        color: #aaa;
    }

    /* Button */
    .search-bar button {
        background: linear-gradient(135deg, #007bff, #0056d2);
        color: #fff;
        border: none;
        border-radius: 40px;
        padding: 12px 26px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    /* Button Hover */
    .search-bar button:hover {
        background: linear-gradient(135deg, #0056d2, #003ea8);
        transform: scale(1.05);
    }

    /* Mobile Optimization */
    @media (max-width: 600px) {
        .search-bar {
            padding: 6px 6px 6px 14px;
        }

        .search-bar button {
            padding: 10px 20px;
            font-size: 13px;
        }
    }
</style>
<div class="journal-page">
    <div class="container">



        <div class="search-wrapper">
            <form class="search-bar">
                <span class="search-icon">🔍</span>
                <input
                    name="search"
                    value="@if( isset($_GET['search']) ){{ $_GET['search']  }}@endif"

                    type="text"
                    placeholder="Search journals, titles, authors...">
                <button type="submit">Search</button>
            </form>
        </div>

        @if($journals->count() > 0)

        <h1 class="page-title">📚 Our Journals</h1>

        @endif

        <style>

            .vm-text {
         font-size: 14px;
         color: #555;
         margin-bottom: 20px;
       }

       /* Limit text height */
       .clamp {
         display: -webkit-box;
         -webkit-line-clamp: 5;
         -webkit-box-orient: vertical;
         overflow: hidden;
       }

       .read-more-btn {
         background: transparent;
         border: 2px solid #0b2c3d;
         color: #0b2c3d;
         padding: 8px 20px;
         border-radius: 30px;
         font-size: 13px;
         cursor: pointer;
         transition: 0.3s;
         margin-top: auto;
         align-self: center;

       }

       .read-more-btn:hover {
         background: #0b2c3d;
         color: #fff;
       }

        </style>    


        @if($journals->count() > 0)
        <div class="journals-grid">
            @foreach($journals as $journal)
            <div  style="position: relative;" class="journal-card">
                <div class="journal-cover" style="background-image: url('{{ $journal->picture ? '/storage/'.$journal->picture :  asset('/journals.png')  }}');"></div>
                <div align="left" class="journal-info">
                    <h3>{{ $journal->title }}</h3>
                    <p class="author">By {{ $journal->author }}</p>
                    <br/>

                  
                  

                    <div  style="position: absolute; bottom :2px">


                    <a  href="{{ asset('storage/' . $journal->file) }}" class="download-btn" download>
                        ⬇ Download
                    </a>

                      @if($journal->description  != NULL)
                    <button class="read-more-btn"
                        data-title="{{ $journal->title }}"
                        data-content="<?php echo htmlspecialchars($journal->description); ?>">
                        Read About
                        </button>
                    <br/>

                    @endif

                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="pagination-wrapper">
            {{ $journals->links() }}
        </div>
        @else
        <div class="no-journals">
            <div class="no-journals-card">

                <h2>No Journals Available</h2>
                <p>Our collection is being updated. Check back soon for new journals!</p>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection