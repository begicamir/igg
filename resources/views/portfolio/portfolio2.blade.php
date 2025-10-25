@extends('layouts.layout')

@php
    $title = 'Portfolio Grid';
    $subTitle = 'Portfolio';

    // Example portfolio data with PDF URLs and info
    $portfolioItems = [
        [
            'pdf' => asset('assets/images/fajlovi/FOMA.pdf'),
            'category' => 'Architecture',
            'title' => 'Stone Mix House',
            'location' => 'London, UK',
            'route' => route('portfolioDetails'),
        ],
        [
            'pdf' => asset('assets/images/fajlovi/hrnjica.pdf'),
            'category' => 'Interior Design',
            'title' => 'Modern Living Room',
            'location' => 'New York, USA',
            'route' => route('portfolioDetails'),
        ],
        [
            'pdf' => asset('assets/images/fajlovi/referalniCentar.pdf'),
            'category' => 'Interior Design',
            'title' => 'Modern Living Room',
            'location' => 'New York, USA',
            'route' => route('portfolioDetails'),
        ],
        // Add more items here...
    ];
@endphp

@section('content')

    <style>
        .portfolio-item {
            display: flex;
            gap: 2rem;
            margin-bottom: 3rem;
            align-items: center;
            flex-wrap: wrap;
        }
        .portfolio-item:nth-child(even) {
            flex-direction: row-reverse;
        }
        .pdf-container {
            flex: 1 1 400px;
            max-width: 800px;
            height: 600px;
            border: 1px solid #ccc;
            overflow-y: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            background: #fff;
            position: relative;
        }
        .pdf-canvas {
            display: block;
            margin: 0.5rem auto;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            width: 100% !important; /* Fit canvas width */
            height: auto !important; /* Maintain aspect ratio */
        }
        .info-container {
            flex: 1 1 300px;
            max-width: 400px;
        }
        .info-category {
            font-weight: 700;
            color: #666;
            margin-bottom: 0.5rem;
        }
        .info-title {
            font-size: 1.8rem;
            margin-bottom: 1rem;
        }
        .info-location {
            color: #999;
            margin-bottom: 1rem;
        }
        .info-link a {
            display: inline-block;
            background: #007bff;
            color: #fff;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 4px;
            transition: background 0.3s ease;
        }
        .info-link a:hover {
            background: #0056b3;
        }
    </style>

    <section class="portfolio-section-two">
        <div class="auto-container">
            @foreach ($portfolioItems as $index => $item)
                <div class="portfolio-item">
                    <div class="pdf-container" id="pdf-container-{{ $index }}">
                        <!-- PDFs will be rendered here -->
                    </div>
                    <div class="info-container">
                        <div class="info-category">{{ $item['category'] }}</div>
                        <h4 class="info-title"><a href="{{ $item['route'] }}">{{ $item['title'] }}</a></h4>
                        <div class="info-location"><i class="fal fa-map-marker-alt"></i> {{ $item['location'] }}</div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <!-- PDF.js library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.min.js"></script>

    <script>
        const portfolioItems = @json($portfolioItems);

        const pdfjsLib = window['pdfjs-dist/build/pdf'];
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.16.105/pdf.worker.min.js';

        portfolioItems.forEach((item, index) => {
            const container = document.getElementById('pdf-container-' + index);
            if (!container) return;

            // Clear container in case of reload
            container.innerHTML = '';

            // Load PDF
            pdfjsLib.getDocument(item.pdf).promise.then(pdf => {
                const renderPage = (pageNum) => {
                    pdf.getPage(pageNum).then(page => {
                        // Get container width to fit the page
                        const containerWidth = container.clientWidth;

                        // Get viewport at scale 1 (unscaled) to calculate proper scale
                        const viewport = page.getViewport({ scale: 1 });

                        // Calculate scale so the page width fits container width
                        const scale = containerWidth / viewport.width;

                        // Get scaled viewport
                        const scaledViewport = page.getViewport({ scale: scale });

                        // Create canvas and set dimensions to scaled size
                        const canvas = document.createElement('canvas');
                        canvas.className = 'pdf-canvas';
                        canvas.height = scaledViewport.height;
                        canvas.width = scaledViewport.width;

                        const context = canvas.getContext('2d');

                        const renderContext = {
                            canvasContext: context,
                            viewport: scaledViewport
                        };

                        page.render(renderContext).promise.then(() => {
                            container.appendChild(canvas);
                            if (pageNum < pdf.numPages) {
                                renderPage(pageNum + 1);
                            }
                        });
                    });
                };

                renderPage(1);
            }).catch(err => {
                container.innerHTML = `<p style="color:red;">Failed to load PDF: ${err.message}</p>`;
            });
        });
    </script>

@endsection
