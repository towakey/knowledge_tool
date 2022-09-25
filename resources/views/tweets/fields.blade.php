<!-- Ref Tweet Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ref_tweet_id', 'Ref Tweet Id:') !!}
    {!! Form::number('ref_tweet_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tweet Type Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tweet_type', 'Tweet Type', ['class' => 'form-check-label']) !!}
    <label class="form-check">
        {!! Form::radio('tweet_type', "tweet", null, ['class' => 'form-check-input']) !!} tweet
    </label>

    <label class="form-check">
        {!! Form::radio('tweet_type', "retweet", null, ['class' => 'form-check-input']) !!} retweet
    </label>

    <label class="form-check">
        {!! Form::radio('tweet_type', "reply", null, ['class' => 'form-check-input']) !!} reply
    </label>

</div>


<!-- Tweet Text Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tweet_text', 'Tweet Text:') !!}
    {!! Form::textarea('tweet_text', null, ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Reply Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reply_count', 'Reply Count:') !!}
    {!! Form::number('reply_count', 0, ['class' => 'form-control','min' => 0]) !!}
</div>

<!-- Retweet Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('retweet_count', 'Retweet Count:') !!}
    {!! Form::number('retweet_count', 0, ['class' => 'form-control','min' => 0]) !!}
</div>

<!-- Favorite Count Field -->
<div class="form-group col-sm-6">
    {!! Form::label('favorite_count', 'Favorite Count:') !!}
    {!! Form::number('favorite_count', 0, ['class' => 'form-control','min' => 0]) !!}
</div>