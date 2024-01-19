@extends('layouts.app')

@section('content')
    <h3 class="gold">Land Cover Classification</h3>

    <p class="violet">A Comparison Between Two CNN Models for Land Cover Detection</p>

    <div class="projectDesc">
        <p class="body">
            The UC Merced Land Use dataset contains 2100 images, spanning 21 different categories of land use.
            I was tasked with developing, and subsequently comparing between, two methods for land
            cover detection. 
        </p>

        <p class="body">
            I opted for practicality and developed two Convolutional Neural Networks (CNNs) using TensorFlow. The first CNN 
            was tailored specifically for the task, trained on the UC Merced Land Use dataset. For the second method, I used 
            transfer learning, leveraging a pre-trained model from the VGG16 dataset — a larger and more diverse collection.
        </p>

        <p class="body">
            The term paper below details and evaluates the development process of each CNN, providing justifications for the choices made. 
            It then dives into the experimental results of comparing the two methods.
        </p>

        <iframe class="embedded" src="https://drive.google.com/file/d/1AULBukIEYe1YAIizPjP3ZEbeGbFUJnWI/preview" width="800" height="600" allow="autoplay"></iframe>
    </div>
@endsection