<div>
    @if($paginator->hasPages())
    <ul>
        @if($paginator->onFirstPage())
        <a role="button" class="btn my-button disabled" aria-disabled="true" href="{{$paginator->previousPageUrl()}}">
            Prev
        </a>
        @else
        <a role="button" class="btn my-button" href="{{$paginator->previousPageUrl()}}">
            Prev
        </a>
        @endif
        <a role="button" class="btn  text-dark">
            {{ $paginator->currentPage() }} of {{ $paginator->lastPage() }} pages
        </a>
        @if($paginator->hasMorePages())
        <a role="button" class=" btn my-button" href="{{$paginator->nextPageUrl()}}">
            Next
        </a>
        @else
        <a role="button" class=" btn my-button disabled" aria-disabled="true" href="{{$paginator->nextPageUrl()}}">
            Next
        </a>
        @endif
        <!-- <a role="button" class="btn text-dark">{{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }}
        </a> -->
    </ul>
    @endif
</div>