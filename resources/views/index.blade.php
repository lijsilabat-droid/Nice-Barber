@extends('layouts.app')

@section('title', 'Nice Barber | Precision Grooming in Bahir Dar')

@section('extra-css')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
<style>
:root{--ink:#211f1c;--muted:#716c64;--paper:#f6f3ed;--cream:#ebe5da;--copper:#a66a45;--line:rgba(33,31,28,.13)}
body:has(#home-page){background:var(--paper);color:var(--ink);font-family:'DM Sans',sans-serif}
body:has(#home-page) nav{background:rgba(246,243,237,.96);border-color:var(--line);box-shadow:none;backdrop-filter:blur(16px)}
body:has(#home-page) nav a{font-family:'DM Sans',sans-serif;color:var(--ink)}
body:has(#home-page) nav .btn-primary{color:#fff}
body:has(#home-page) footer{background:#211f1c}
#home-page{overflow:hidden}#home-page *,#home-page *:before,#home-page *:after{box-sizing:border-box}
#home-page .wrap{width:min(1200px,calc(100% - 48px));margin:auto}
#home-page h1,#home-page h2,#home-page h3,#home-page p{margin-top:0}
#home-page h1,#home-page h2,#home-page h3,.nb-serif{font-family:'Playfair Display',Georgia,serif;font-weight:500}
#home-page .eyebrow{display:inline-flex;align-items:center;gap:10px;color:var(--copper);font-size:.72rem;font-weight:700;letter-spacing:.19em;text-transform:uppercase}
#home-page .eyebrow:before{content:'';width:28px;height:1px;background:currentColor}
#home-page .button{min-height:54px;display:inline-flex;align-items:center;justify-content:center;gap:12px;padding:0 23px;border:1px solid var(--ink);border-radius:2px;background:var(--ink);color:white;font-size:.83rem;font-weight:700;letter-spacing:.04em;text-decoration:none;transition:.25s}
#home-page .button:hover{background:var(--copper);border-color:var(--copper);color:white;transform:translateY(-2px)}
#home-page .button.alt{background:transparent;color:var(--ink)}
#home-page .button.alt:hover{background:var(--ink);color:white}
#home-page .button svg,#home-page .text-link svg{width:16px;height:16px}
#home-page .hero{padding:62px 0 72px}
#home-page .hero-grid{display:grid;grid-template-columns:.9fr 1.1fr;align-items:center;gap:7%;min-height:525px}
#home-page .hero-copy{animation:rise .8s both}
#home-page .hero h1{max-width:590px;margin:23px 0 21px;font-size:clamp(3.4rem,6.6vw,6.2rem);line-height:.99;letter-spacing:-.055em}
#home-page .hero h1 em{color:var(--copper)}
#home-page .hero-copy>p{max-width:440px;margin-bottom:29px;color:var(--muted);font-size:1rem;line-height:1.85}
#home-page .hero-actions{display:flex;flex-wrap:wrap;gap:12px}
#home-page .proof{display:flex;align-items:center;gap:15px;margin-top:36px;color:var(--muted);font-size:.78rem}
#home-page .avatars{display:flex;padding-left:7px}
#home-page .avatars span{width:31px;height:31px;display:grid;place-items:center;margin-left:-7px;border:2px solid var(--paper);border-radius:50%;background:#c9a78c;color:white;font-size:.62rem;font-weight:700}
#home-page .avatars span:nth-child(2){background:#796354}#home-page .avatars span:nth-child(3){background:#a9856b}
#home-page .proof strong{color:var(--ink)}
#home-page .hero-visual{position:relative;min-height:500px}
#home-page .hero-photo{position:absolute;inset:0 7% 0 4%;overflow:hidden;background:#8c7664}
#home-page .hero-photo img{width:100%;height:100%;display:block;object-fit:cover;filter:saturate(.72)}
#home-page .hero-photo:after{content:'';position:absolute;inset:0;background:linear-gradient(0deg,rgba(23,19,15,.46),transparent 56%)}
#home-page .photo-label{position:absolute;z-index:1;left:28px;bottom:25px;color:white}
#home-page .photo-label small{display:block;margin-bottom:7px;color:#e0c3a8;font-size:.68rem;letter-spacing:.18em;text-transform:uppercase}
#home-page .photo-label strong{font-family:'Playfair Display',Georgia,serif;font-size:1.55rem;font-weight:500}
#home-page .stamp{position:absolute;z-index:2;right:0;top:36px;width:108px;height:108px;display:grid;place-items:center;border:1px solid white;border-radius:50%;background:var(--paper);text-align:center;transform:rotate(9deg);box-shadow:0 15px 40px #20181020}
#home-page .stamp span{max-width:72px;font-size:.59rem;font-weight:700;letter-spacing:.13em;line-height:1.7;text-transform:uppercase}
#home-page .hero-note{position:absolute;right:0;bottom:30px;z-index:2;width:177px;padding:18px;background:#fffdf8;box-shadow:0 14px 38px #20181020}
#home-page .hero-note b{display:block;margin-bottom:5px;font-family:'Playfair Display',Georgia,serif;font-size:1.15rem;font-weight:500}
#home-page .hero-note small{color:var(--muted);font-size:.72rem}
#home-page .trust{border-block:1px solid var(--line)}
#home-page .trust-grid{min-height:88px;display:grid;grid-template-columns:repeat(4,1fr);align-items:center}
#home-page .trust-item{padding:14px 18px;border-right:1px solid var(--line);text-align:center}
#home-page .trust-item:last-child{border:0}
#home-page .trust-item strong{display:block;margin-bottom:4px;font-family:'Playfair Display',Georgia,serif;font-size:1.1rem;font-weight:500}
#home-page .trust-item span{color:var(--muted);font-size:.68rem;letter-spacing:.1em;text-transform:uppercase}
#home-page .section{padding:100px 0}
#home-page .section.white{background:#fbf9f5}
#home-page .section-head{display:flex;align-items:end;justify-content:space-between;gap:28px;margin-bottom:36px}
#home-page .section-head h2{margin:12px 0 0;font-size:clamp(2.2rem,4vw,3.5rem);line-height:1.08;letter-spacing:-.04em}
#home-page .section-head p{max-width:370px;margin-bottom:3px;color:var(--muted);font-size:.88rem;line-height:1.8}
#home-page .text-link{display:inline-flex;align-items:center;gap:9px;margin-top:11px;color:var(--ink);font-size:.76rem;font-weight:700;letter-spacing:.04em;text-decoration:none}
#home-page .text-link:hover{color:var(--copper)}
#home-page .services{display:grid;grid-template-columns:repeat(3,1fr);gap:17px}
#home-page .service{min-height:280px;display:flex;flex-direction:column;padding:27px;border:1px solid var(--line);background:#f7f4ee;transition:.28s}
#home-page .service:hover{transform:translateY(-5px);background:#fffdf9;box-shadow:0 18px 42px #251f180f}
#home-page .service-top{display:flex;justify-content:space-between}
#home-page .service-icon{width:43px;height:43px;display:grid;place-items:center;border:1px solid var(--line);border-radius:50%;color:var(--copper)}
#home-page .service-icon svg{width:19px}
#home-page .service-no{color:#aaa297;font-size:.68rem;letter-spacing:.12em}
#home-page .service h3{margin:27px 0 9px;font-size:1.5rem}
#home-page .service p{max-width:270px;margin-bottom:20px;color:var(--muted);font-size:.8rem;line-height:1.7}
#home-page .service-bottom{display:flex;justify-content:space-between;align-items:center;margin-top:auto;padding-top:15px;border-top:1px solid var(--line)}
#home-page .price{font-size:.75rem;font-weight:700}#home-page .price b{color:var(--copper);font-size:.98rem}
#home-page .arrow{color:var(--ink);font-size:1.1rem;text-decoration:none}
#home-page .team-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px}
#home-page .barber-photo{position:relative;aspect-ratio:.78;display:grid;place-items:center;overflow:hidden;background:radial-gradient(circle at 70% 25%,#dac6b0 0 16%,transparent 17%),linear-gradient(145deg,#6d5848,#b89779)}
#home-page .barber-photo span{font-family:'Playfair Display',Georgia,serif;font-size:4.5rem;letter-spacing:-.1em;color:#fff8;transform:translateX(-.08em)}#home-page .barber-photo:after{content:'';position:absolute;inset:12px;border:1px solid #ffffff55;pointer-events:none}#home-page .barber:nth-child(2) .barber-photo{background:radial-gradient(circle at 72% 28%,#d7c1a7 0 16%,transparent 17%),linear-gradient(145deg,#54443b,#99785f)}#home-page .barber:nth-child(3) .barber-photo{background:radial-gradient(circle at 72% 28%,#c9ac90 0 16%,transparent 17%),linear-gradient(145deg,#5d5a50,#9c927d)}#home-page .barber:nth-child(4) .barber-photo{background:radial-gradient(circle at 72% 28%,#d9c5b2 0 16%,transparent 17%),linear-gradient(145deg,#635246,#a98062)}

#home-page .barber h3{margin:15px 0 4px;font-size:1.08rem}
#home-page .barber p{margin:0;color:var(--muted);font-size:.7rem}
#home-page .gallery{display:grid;grid-template-columns:1.2fr .8fr .8fr;grid-template-rows:205px 205px;gap:12px}
#home-page .gallery figure{position:relative;overflow:hidden;margin:0;background:#9c8875}
#home-page .gallery figure:first-child{grid-row:span 2}
#home-page .gallery img{width:100%;height:100%;display:block;object-fit:cover;filter:saturate(.7);transition:transform .55s}
#home-page .gallery figure:hover img{transform:scale(1.04)}
#home-page .gallery figcaption{position:absolute;inset:auto 0 0;padding:27px 16px 14px;background:linear-gradient(transparent,#14110e99);color:white;font-size:.72rem;letter-spacing:.08em}
#home-page .visit-grid{display:grid;grid-template-columns:.85fr 1.15fr;gap:16px}
#home-page .info-card{padding:34px;border:1px solid var(--line);background:#fbf9f5}
#home-page .info-card h3{margin:13px 0 24px;font-size:1.85rem}
#home-page .hours-row{display:flex;justify-content:space-between;gap:12px;padding:13px 0;border-bottom:1px solid var(--line);color:var(--muted);font-size:.78rem}
#home-page .hours-row strong{color:var(--ink)}
#home-page .map-card{position:relative;min-height:380px;display:flex;align-items:end;overflow:hidden;padding:27px;background:#d9d3c7}#home-page .map-card iframe{position:absolute;inset:0;width:100%;height:100%;border:0;filter:grayscale(.72) sepia(.12)}#home-page .map-card:after{content:'';position:absolute;inset:45% 0 0;background:linear-gradient(transparent,#171411bb);pointer-events:none}
#home-page .map-pin{position:absolute;top:34%;left:52%;z-index:1;width:52px;height:52px;display:grid;place-items:center;border:4px solid white;border-radius:50% 50% 50% 4px;background:var(--copper);color:white;font-size:1.2rem;text-decoration:none;transform:rotate(-45deg);box-shadow:0 10px 24px #0004}
#home-page .map-pin span{transform:rotate(45deg)}
#home-page .map-caption{position:relative;z-index:1;color:white}
#home-page .map-caption small{display:block;margin-bottom:7px;color:#e9cbb2;font-size:.66rem;letter-spacing:.14em;text-transform:uppercase}
#home-page .map-caption strong{font-family:'Playfair Display',Georgia,serif;font-size:1.4rem;font-weight:500}
#home-page .contact-line{display:flex;gap:14px;padding:12px 0;color:var(--muted);font-size:.8rem;line-height:1.7}
#home-page .contact-line strong{display:block;color:var(--ink);font-size:.74rem}
#home-page .contact-line a{color:inherit;text-decoration:none}
#home-page .contact-line a:hover{color:var(--copper)}
#home-page .contact-icon{width:34px;height:34px;flex:none;display:grid;place-items:center;border:1px solid var(--line);color:var(--copper)}
#home-page .contact-icon svg{width:16px}
#home-page .cta{position:relative;padding:72px 0;overflow:hidden;background:#24211e;color:white}
#home-page .cta:after{content:'NB';position:absolute;right:4%;bottom:-100px;color:#ffffff09;font-family:'Playfair Display',Georgia,serif;font-size:24rem;line-height:1}
#home-page .cta-inner{position:relative;z-index:1;display:flex;align-items:center;justify-content:space-between;gap:24px}
#home-page .cta h2{max-width:600px;margin:12px 0 0;font-size:clamp(2.2rem,4.2vw,3.7rem);line-height:1.08}
#home-page .cta .button{border-color:#d0a17f;background:#d0a17f;color:#211f1c}
#home-page .cta .button:hover{border-color:white;background:white}
#home-page .reveal{opacity:0;transform:translateY(18px);transition:opacity .7s,transform .7s}
#home-page .reveal.visible{opacity:1;transform:none}
@keyframes rise{from{opacity:0;transform:translateY(18px)}to{opacity:1;transform:none}}
@media(max-width:900px){#home-page .hero-grid{grid-template-columns:1fr 1fr;gap:4%}#home-page .hero-visual{min-height:425px}#home-page .team-grid{grid-template-columns:repeat(2,1fr);row-gap:28px}#home-page .gallery{grid-template-rows:170px 170px}}
@media(max-width:640px){
#home-page .wrap{width:min(100% - 36px,520px)}#home-page .hero{padding:27px 0 43px}#home-page .hero-grid{grid-template-columns:1fr;gap:29px}#home-page .hero h1{margin:18px 0 15px;font-size:clamp(3.1rem,15vw,5rem)}#home-page .hero-copy>p{font-size:.9rem}#home-page .hero-actions{display:grid;grid-template-columns:1fr}#home-page .button{width:100%}#home-page .proof{margin-top:23px}#home-page .hero-visual{min-height:380px}#home-page .hero-photo{inset:0 17px 0 0}#home-page .stamp{top:16px;width:86px;height:86px}#home-page .stamp span{font-size:.5rem}#home-page .hero-note{bottom:18px;width:148px;padding:14px}#home-page .hero-note b{font-size:1rem}
#home-page .trust-grid{grid-template-columns:1fr 1fr;padding:8px 0}#home-page .trust-item{padding:12px 5px}#home-page .trust-item:nth-child(2){border:0}#home-page .section{padding:68px 0}#home-page .section-head{align-items:flex-start;flex-direction:column;margin-bottom:25px}#home-page .section-head p{margin:0}#home-page .services{grid-template-columns:1fr;gap:10px}#home-page .service{min-height:235px;padding:22px}#home-page .team-grid{gap:23px 12px}#home-page .barber h3{font-size:.97rem}#home-page .gallery{grid-template-columns:1fr 1fr;grid-template-rows:220px 130px 130px;gap:9px}#home-page .gallery figure:first-child{grid-column:span 2;grid-row:auto}#home-page .visit-grid{grid-template-columns:1fr;gap:11px}#home-page .info-card{padding:25px 21px}#home-page .map-card{min-height:265px}#home-page .cta{padding:55px 0}#home-page .cta-inner{align-items:flex-start;flex-direction:column}#home-page .cta:after{right:-40px;bottom:-45px;font-size:13rem}
}
@media(prefers-reduced-motion:reduce){#home-page *,#home-page *:before,#home-page *:after{animation-duration:.01ms!important;transition-duration:.01ms!important}#home-page .reveal{opacity:1;transform:none}}
</style>
@endsection

@section('content')
@php
$homeServices = [
 ['number'=>'01','name'=>'The Signature Cut','description'=>'A considered haircut, finished with clean lines and a style made for you.','price'=>'300','icon'=>'cut'],
 ['number'=>'02','name'=>'Shape & Detail','description'=>'Expert shaping and precise detailing to bring your look together.','price'=>'150','icon'=>'detail'],
 ['number'=>'03','name'=>'The Full Experience','description'=>'Our complete grooming package for a fresh, polished finish.','price'=>'1,000','icon'=>'star'],
];
$homeBarbers = [
 ['name'=>'Amare Tena','initials'=>'AT','role'=>'Senior Barber · Fade Specialist'],
 ['name'=>'Alex Tena','initials'=>'AT','role'=>'Stylist · Color Expert'],
 ['name'=>'Habte','initials'=>'H','role'=>'Beard & Grooming'],
 ['name'=>'Antehun','initials'=>'A','role'=>'Family & Kids Cuts'],
];
@endphp
<main id="home-page">
<section class="hero"><div class="wrap hero-grid">
<div class="hero-copy"><span class="eyebrow">Bahir Dar · Est. with care</span><h1>Good style.<br><em>Good company.</em></h1><p>More than a haircut. A place to reset, feel at home, and leave looking like the best version of yourself.</p>
<div class="hero-actions"><a class="button" href="{{ route('booking.form') }}">Book an Appointment <svg viewBox="0 0 20 20" fill="none" aria-hidden="true"><path d="M3 10h13M10 4l6 6-6 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a><a class="button alt" href="{{ route('services') }}">Explore Services</a></div>
<div class="proof"><div class="avatars" aria-hidden="true"><span>AT</span><span>AT</span><span>H</span></div><span><strong>Four good hands.</strong> One great experience.</span></div></div>
<div class="hero-visual"><div class="hero-photo"><img src="https://images.unsplash.com/photo-1503951914875-452162b0f3f1?auto=format&amp;fit=crop&amp;w=1100&amp;q=88" alt="A warm, thoughtfully designed barbershop" fetchpriority="high"><div class="photo-label"><small>Nice Barber · Bahir Dar</small><strong>Your chair is waiting.</strong></div></div><div class="stamp"><span>Crafted with care · Since day one</span></div><div class="hero-note"><b>Come as you are.</b><small>Leave feeling your best.</small></div></div>
</div></section>
<section class="trust" aria-label="About Nice Barber"><div class="wrap trust-grid"><div class="trust-item"><strong>4 skilled barbers</strong><span>Good people, great craft</span></div><div class="trust-item"><strong>5+ services</strong><span>Your style, your way</span></div><div class="trust-item"><strong>Walk-ins welcome</strong><span>Appointments encouraged</span></div><div class="trust-item"><strong>Right here in Bahir Dar</strong><span>Just by the Stadium</span></div></div></section>
<section class="section white" id="home-services"><div class="wrap"><div class="section-head reveal"><div><span class="eyebrow">The details matter</span><h2>Made for your<br>kind of good.</h2></div><div><p>From a sharp everyday cut to the full reset, settle in and let us take care of the details.</p><a class="text-link" href="{{ route('services') }}">View all services →</a></div></div>
<div class="services">@foreach($homeServices as $service)<article class="service reveal"><div class="service-top"><span class="service-icon">@if($service['icon']==='cut')<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="6" cy="6" r="3" stroke="currentColor" stroke-width="1.5"/><circle cx="6" cy="18" r="3" stroke="currentColor" stroke-width="1.5"/><path d="m8 8 12 12M14 10l6-6M8 16l4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>@elseif($service['icon']==='detail')<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 20 17.5 6.5a2 2 0 0 1 3 3L7 23M14 8l3 3M4 4l2 2M4 10h3M10 4v3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>@else<svg viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="m12 3 2.7 5.5 6.1.9-4.4 4.3 1 6.1-5.4-2.9-5.4 2.9 1-6.1-4.4-4.3 6.1-.9L12 3Z" stroke="currentColor" stroke-width="1.5"/></svg>@endif</span><span class="service-no">{{ $service['number'] }}</span></div><h3>{{ $service['name'] }}</h3><p>{{ $service['description'] }}</p><div class="service-bottom"><span class="price">From <b>ETB {{ $service['price'] }}</b></span><a class="arrow" href="{{ route('booking.form') }}" aria-label="Book {{ $service['name'] }}">↗</a></div></article>@endforeach</div></div></section>
<section class="section" id="home-team"><div class="wrap"><div class="section-head reveal"><div><span class="eyebrow">The people behind the chair</span><h2>Good hands.<br>Good humans.</h2></div><div><p>Our team brings skill, care, and a little good conversation to every appointment.</p><a class="text-link" href="{{ route('team') }}">Meet the whole team →</a></div></div><div class="team-grid">@foreach($homeBarbers as $barber)<article class="barber reveal"><div class="barber-photo" aria-hidden="true"><span>{{ $barber['initials'] }}</span></div><h3>{{ $barber['name'] }}</h3><p>{{ $barber['role'] }}</p></article>@endforeach</div></div></section>
<section class="section white" id="home-gallery"><div class="wrap"><div class="section-head reveal"><div><span class="eyebrow">A little look around</span><h2>Settle in.<br>Make yourself at home.</h2></div><p>A few scenes that capture what we love about the craft: precision, personality, and time well spent.</p></div><div class="gallery reveal">
<figure><img src="https://images.unsplash.com/photo-1600948836101-f9ffda59d250?auto=format&amp;fit=crop&amp;w=1000&amp;q=80" alt="A welcoming barbershop interior" loading="lazy"><figcaption>Our place, your pace</figcaption></figure>
<figure><img src="https://images.unsplash.com/photo-1621605815971-fbc98d665033?auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="A barber shaping a precise cut" loading="lazy"><figcaption>The craft</figcaption></figure>
<figure><img src="https://images.unsplash.com/photo-1622286342621-4bd786c2447c?auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="A fresh detailed haircut" loading="lazy"><figcaption>The finishing touch</figcaption></figure>
<figure><img src="https://images.unsplash.com/photo-1599351431202-1e0f0137899a?auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="A relaxed barbershop visit" loading="lazy"><figcaption>Good company</figcaption></figure></div></div></section>
<section class="section" id="home-visit"><div class="wrap"><div class="section-head reveal"><div><span class="eyebrow">Come by anytime</span><h2>Your neighborhood<br>barbershop.</h2></div><p>Find us by the Stadium in Bahir Dar. We’re open every day and always happy to see you.</p></div>
<div class="visit-grid"><div class="info-card reveal"><span class="eyebrow">Opening hours</span><h3>We’ll be here.</h3><div class="hours-row"><strong>Monday – Sunday</strong><span>8:00 AM – 6:00 PM</span></div><div class="hours-row"><strong>Walk-ins</strong><span>Welcome</span></div><div class="hours-row"><strong>Appointments</strong><span>Recommended</span></div></div>
<div class="map-card reveal"><iframe src="https://maps.google.com/maps?q=11.587644,37.381240&amp;z=16&amp;output=embed" title="Map showing Nice Barber in Bahir Dar" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><a class="map-link" href="https://maps.google.com/?q=11.587644,37.381240" target="_blank" rel="noopener noreferrer">Open in Maps ↗</a><div class="map-caption"><small>Find Nice Barber</small><strong>In front of the Stadium, Bahir Dar</strong></div></div>
<div class="info-card reveal"><span class="eyebrow">Say hello</span><h3>We’d love to see you.</h3><div class="contact-line"><span class="contact-icon">⌖</span><div><strong>Visit us</strong>In front of Stadium, Bahir Dar<br><span lang="am">ስታዲየም ፊት ለፊት</span></div></div><div class="contact-line"><span class="contact-icon">↗</span><div><strong>Call us</strong><a href="tel:0918289788">091 828 9788</a></div></div><div class="contact-line"><span class="contact-icon">✉</span><div><strong>Message us</strong><a href="https://t.me/nicebarber" target="_blank" rel="noopener noreferrer">Chat with us on Telegram</a></div></div></div></div></div></section>
<section class="cta"><div class="wrap cta-inner"><div><span class="eyebrow">A good cut changes everything</span><h2>Make a little time<br>for yourself.</h2></div><a class="button" href="{{ route('booking.form') }}">Book an Appointment →</a></div></section>
</main>
@endsection

@section('extra-js')
<script>(()=>{const items=document.querySelectorAll('#home-page .reveal');if(!('IntersectionObserver'in window)||window.matchMedia('(prefers-reduced-motion: reduce)').matches){items.forEach(item=>item.classList.add('visible'));return}const observer=new IntersectionObserver((entries,obs)=>entries.forEach(entry=>{if(entry.isIntersecting){entry.target.classList.add('visible');obs.unobserve(entry.target)}}),{threshold:.12});items.forEach(item=>observer.observe(item))})();</script>
@endsection
