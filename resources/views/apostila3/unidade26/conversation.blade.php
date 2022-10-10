@extends('layouts.template')
@section('titulo','Unit 26 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila3" data-unidade="unidade26" data-etapa="conversation">
			<h3 class="barlow">UNIT 26</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
                <source src="{{ asset('assets/audio/apostila3/LESSON 26/02_CONVERSATION/CONVERSATION_26.mp3') }}" type="audio/mp3">
            </audio>
            <div class="clear"></div>
            <p style="margin-top: 16px">
                <p><b>Jake :</b> Hey you guys, how’s it going? Are you ready for today’s class?</p>
                <p><b>Students :</b> For sure teacher, We’re always ready.</p>
                <p>
                    <b>Jake :</b> Great guys, so let’s think about an interesting topic. We started our course
                    talking about changes in the way people and companies promote their personal and
                    professional ideas, products and etc. Along the course, we saw a lot of techniques to
                    help us deliver meaningful content through our channels, sites, blogs and etc. Based
                    on all these elements we have considered so far, do you guys believe we can make a
                    difference in the society? Do you really believe we have more power nowadays than
                    our parents had before?
                </p>
                <p><b>Students :</b> Gee, what a question! I mean, questions!</p>
                <p>
                    <b>Laura :</b> Teacher, I think that the evolution of technology, social media and lots of other
                    things like psychology, neuroscience have soundly affected the way we see ourselves.
                    As I mentioned before, I don’t feel limited as probably my parents or grandparents
                    felt in the past. The feeling of being limitless certainly enables us to have many
                    different experiences and these experiences lead us to be who we are today. Much
                    more aware of our place and importance in the society.
                </p>
                <p>
                    <b>John :</b> I totally agree with Laura. We could mention many good things this evolution,
                    this new way of seeing things, brought to society. Laura mentioned the freedom to
                    choose what we want to consume and I believe this freedom enables us to be aligned
                    with our inner selves. In the past we were educated to follow outer ideas and being
                    against them or having different ideas, was not welcome.
                </p>
                <p>
                    <b>Akira :</b> I think we have some negative aspects as well. Relationships may be more
                    superficial today. You may have tons of followers on a social media platform but no
                    real friend to share important things. Because of that we need to develop skills that
                    were not that relevant in the past. For example, the capacity to differentiate real from
                    virtual friends.
                </p>
                <p><b>Jake :</b> Great guys. Based on all these comments, do you believe we live in a better moment?</p>
                <p>
                    <b>Laura :</b> I think so. Freedom is the key to impact other people’s lives and since we are
                    talking about being meaningful, I can’t be true and meaningful if I’m not free to say
                    what I want. (to be continued)
                </p>
            </p>
            <figure class="umterco">
                <img src="{{ asset('assets/img/masteroflanguage/unit26/conversation1.png') }}" alt="eletrônicos">
            </figure>
            <figure class="umterco">
                <img src="{{ asset('assets/img/masteroflanguage/unit26/conversation2.png') }}" alt="eletrônicos">
            </figure>
            <figure class="umterco">
                <img src="{{ asset('assets/img/masteroflanguage/unit26/conversation3.png') }}" alt="eletrônicos">
            </figure>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection
