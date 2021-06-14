<?php

namespace App\Http\Livewire\comprador;
use Livewire\WithPagination;
use App\Models\Local;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;


class LocalSearch extends Component
{
    use WithPagination;

    public $localnombre,$localtipo;
    public $localtypes; //pasado al controlador desde el view anterior


    public function limpiar(){
        $this->reset(['localnombre','localtipo']) ;
        return redirect()->route(('dashboard'));
    }
    public function mount($localnombre=null, $localtipo=null)
	{
		$this->localnombre = $localnombre;
		$this->localtipo = $localtipo;
	}
    
    public function render()
    {

        $query = Local::query()->whereHas('localstate',function(Builder $qy){
            $qy->where('name','Activo');
        });

        if($this->localnombre) {
            $query =  $query->where('name','like','%'.$this->localnombre.'%');
        }
        if($this->localtipo) {
            $query =  $query->whereHas('localtype',function(Builder $qy){
                 $qy->where('name',$this->localtipo);
            });
        }

        $locals = $query->paginate(10);

        return view('livewire.comprador.local-search',compact('locals'));
    }

    
    


    


}
