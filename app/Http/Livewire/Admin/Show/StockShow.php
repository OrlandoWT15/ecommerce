<?php

namespace App\Http\Livewire\Admin\Show;
use Livewire\WithPagination;
use Livewire\Component;
use App\Models\Stock;
use App\Models\Provider;
use App\Models\WareHouse;
use App\Models\Product;
use App\Models\Variation;
use Illuminate\Database\Eloquent\Builder;
use App\Traits\InteractsWithBanner;


class StockShow extends Component
{
    use InteractsWithBanner;
    use WithPagination;

    public $stockId;
    public $search;
    public $stocck;
    public $pro;
    public $ware;
    public $produ;
    public $vari;
    public $porpagina=5;

    protected $queryString = [
        'search' => ['except' => ""],
        'porpagina' => ['except' => ""],
        'stockId' => ['except' => ""],
    ];
    //recargar a la hora de actualizar
    protected $listeners=['recargar'=>'render'];

    public function mount()
    {
        $this->pro=Provider::all();
        $this->ware=WareHouse::all();
        $this->produ=Product::all();
        $this->vari=Variation::all();
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }
    public function updatedPorpagina()
    {
        $this->resetPage();
    }
    public function get_stock()
    {
        if ($this->stockId != "" && $this->search == "") {
            return Stock::where('id',$this->stockId);
        }else{
            $this->stockId="";
            return Stock::whereHasMorph(
                'stockable',
                Variation::class,
                function (Builder $variation) {
                    return $variation->whereHas('product',function(Builder $product){
                        return $product->where('name','LIKE',"%{$this->search}%")->orderBy('name','DESC');
                    });
                }
                )->orWhere(function(Builder $stock){
                    return $stock->whereHas('warehouse',function(Builder $warehouse){
                        return $warehouse->where('name','LIKE',"%{$this->search}%");
                    });
                });
        }
    }
    public function render()
    {
        return view('livewire.admin.show.stock-show',[
            'stocks'=> $this->get_stock()->paginate($this->porpagina),
        ])
        ->layout("layouts.admin");
    }
}
