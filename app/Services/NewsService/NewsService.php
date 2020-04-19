<?php


namespace App\Services\NewsService;


use App\Repositories\NewsRepository\NewsRepositoryInterface;

class NewsService implements NewsServiceInterface
{
    protected $newsRepository;

    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function getAll() {
        return $this->newsRepository->getAll();
    }

    public function store($data) {
        $fileImage = $data['image'];
        $fileImage->move('upload/images', $fileImage->getClientOriginalName());
        $data['image'] = $fileImage->getClientOriginalName();
        $this->newsRepository->create($data);
    }

    public function update($data, $id) {
        $currentNews = $this->newsRepository->getById($id);
        $fileImage = $data['image'];
        $fileImage->move('upload/images', $fileImage->getClientOriginalName());
        $data['image'] = $fileImage->getClientOriginalName();
        $this->newsRepository->update($data, $currentNews);
    }

    public function destroy($id) {
        $news = $this->newsRepository->getById($id);
        $this->newsRepository->delete($news);
    }

    public function findById($id) {
        return $this->newsRepository->getById($id);
    }

    public function getNewestNews()
    {
        return $this->newsRepository->getNewestNews();
    }

    public function getPromoNews()
    {
        return $this->newsRepository->getPromoNews();
    }

    public function getHiringNews()
    {
        return $this->newsRepository->getHiringNews();
    }
}
