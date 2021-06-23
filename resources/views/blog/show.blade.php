@extends('layouts.app')

@section('content')
<section class="bg-gray-white px-6  py-4 bg-gray-100">
 <div class="md:ml-20 md:mr-20 md:mb-10 bg-white md:p-5 border-1 border-gray-300 shadow-lg">
  <div class="w-2/5 m-auto text-gray-900 font-bold text-left">
    <div class="py-5 mb-10 border-b border-gray-20 text-center">
        <h1 class="text-3xl mt-15">
             {{$post->title}}
        </h1>
    </div>
  </div>
   
  <div class="md:flex viewimage items-center justify-center">
    <img  src="{{ asset('images/'.$post->image_path) }}" alt="blog post image">
  
</div>
<div class="2-4/5 m-atuo pt-20">
  <h3 class="text-gray-800 py-10 md:pl-20 bg-gray-300 border-b-2 border-t-2 pl-5 relative md:mx-20">
      By <span class=font-bold italic text-gray-800">
          {{ $post->user->name }}</span> Created on {{ date('jS M Y', strtotime($post->updated_at) ) }}
      </h3>


   <p class="text-xl text-gray-900 pt-8 px-5 pb-10 leading-8 font-light md:mx-20">
       {!! $post->description !!}
   </p>
  </div>
  <div class="about-author mb-20 px-5 bg-white justify-center rounded shadow-lg border mt-8 md:mx-20 border-gray-200">
    <h2 class="text-gray-600 font-extrabold text-xl text-left my-5">About the Author</h2>
       <div class="content-holder flex ">
         <div class="user-avatar  justify-center">
           <i class="hover:bg-blue-400 hover:text-blue-700 border-2 p-3 md:p-5 md:m-5 fas fa-user fa-3x  text-yellow-500"></i>
         </div>

         <div class="text-holder ml-5 my-2">
           <h2 class="text-gray-900 font-extrabold text-xl">{{ $post->user->name }}</h2>
           <p class="font-semibold my-2">{{ $post->user->about_me }} </p>            
         </div>
       </div>
   </div>

</div>

   <div id="disqus_thread"></div>
<script>
    /**
    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    /*
    var disqus_config = function () {
    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://wildskin.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


</section>

</section>

@endsection  