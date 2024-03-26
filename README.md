# 1. 기후동행카드 사용 현황 분석
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/2d2778fa-d66b-4f69-a978-83845f629d10" width="800" height="400">

### 01. 💡프로젝트 소개
* 수도권 교통 상황 분석  
* 기후동행카드 제도의 유효성을 입증하고 서울외 수도권으로의 확대 필요성 제시
### 기후동행카드란?
* **월 6만원대**로 지하철, 버스, 따릉이를 **무제한** 이용할 수 있는 대중교통 통합 정기권
* 이용범위 - 서울지역 지하철, 서울시 면허 시내버스와 마을버스, 따릉이
* 이용제외 - 신분당선, **서울지역 외** 지하철, 타 지역 면허버스
### 02. 🚩프로젝트 목표
* 대중교통 데이터 분석을 통해 대중교통 이용 실태를 확인한다.
* Selenium, Beautifulsoup 등을 사용해 대중교통 데이터를 크롤링한다.
* 아마존 aws의 RDS(클라우드 데이터베이스)에 수집한 데이터를 보관하고 검색한다.
* 수도권의 대중교통 이용정보를 여러가지 방법을 통해 시각화한다. 

### 03. 🔑프로젝트 기술
-	MySQL 기반 DB 구축 및 AWS 연동을 통한 관리
-	selenium과 beautifulsoup를 활용한 웹크롤링
-	pandas 모듈을 통한 데이터 전처리
-	matplotlib, seaborn, plotly,folium등을 활용한 데이터 시각

# 팀 소개
## 팀명 작심삼일
|이름|역할|
|:---:|:---:|
|김민경|데이터 수집, 전처리 및 시각화 / 총괄|
|김세현|데이터 수집, 전처리 및 시각화 / DB 구성|
|김요한|데이터 수집, 전처리 및 시각화 / 분석(EDA)|
|신재훈|데이터 수집, 전처리 및 시각화 / 분석(EDA) / 발표|

# 2. 프로젝트 과정
1. 대중교통 정보 사이트 등에서 데이터를 크롤링한다.
2. 모은 데이터들을 데이터베이스에 모으고 종합하여 분석한다.


## 2-1. 데이터 수집

--------


## 2-2. 데이터 분석
### 1. 수도권 대중교통 이용량
### 2. 수도권 대중교통 이용시간
### 3. 서울-경기,인천 간 인구 이동
### 4. 기후동행카드 사용 범위
   ----------
## 수도권 교통 분석
### 하루 대중교통 이용량
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/c041573c-ecb8-4ef3-b5ad-66385e43e07f" width="500">  

* 서울이 하루 100만명 정도로 대중교통 이용이 가장 많지만 경기도도 50만명 정도로 상당수를 차지한다.
### 월별 대중교통 이용량
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/7343c925-098c-4fc1-9322-8bcc4f3a06c8" width="500">

* 코로나 이후로 대중교통 이용량이 급격하게 줄었다.
* 전체적으로 방학 시기에 대중교통 이용량이 줄고 학기중에 늘어나는 모습이 보인다.

### 각 시도의 대중교통 이용 시간
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/a5fc9175-7d51-4ce4-bd21-34dcabb5808f" width="500">  
* 출퇴근 시간대에 대중교통 이용이 몰려있다

### 수도권 오전 오후 유입인구
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/122e68a0-cdb8-45f1-9bb1-6c2f59e0aa0c" width="500">  

* 수도권 지역의 오전 오후별로 유입되는 인구를 나타낸 것이다
* 경기도, 인천에선 인구가 오전에 유출되고 오후에 다시 유입되는 모습을 보이지만 서울에서는 인구가 오전에 유입되고 오후에 유출되는 모습을 보인다.

### 서울 유입 지역 순위
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/68999d62-f843-4cb1-b9f3-a5848a169f2e" width="500">  

* 서울로 많이 이동하는 지역들이다. 서울과 버스와 철도가 잘 연결되어 있지만 기후동행카드의 혜택을 받지 못하는 지역들이 많다.


-------
## 기후동행카드 분석
### 1. 기후동행카드 사용 범위
### 2. 기후동행카드 이용시 예상 이익
--------

### 기후동행카드 사용가능한 역
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/c934035e-7ca0-49e6-982e-303c95a61815" width="500">  

* 수도권 도시철도중에서 기후동행카드를 사용할 수 있는 역이 얼마 되지 않는다
  
### 기후동행카드 이용시 예상 이익
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/db2813c3-2781-41ab-ba96-8b800c4f9611" width="500"> 

* 경기도 고양시를 선정하여 기후동행카드 도입시 예상 이익을 산출했다
* 지역민이 한달동안 20일, 왕복 교통으로 하루에 2회 이용하여 **총 40회 이용**한다고 가정하여 사용량을 산출했다.
* 경기도지역이 기후동행카드를 사용가능하게 되면 많은 교통비를 절감할 수 있을 것으로 보인다.

# 4. 결론
* 현재 기후동행카드는 서울에서만 가능하고 지하철역 상당수와 서울을 자주 오가는 경기도와 인천 지역에서 사용이 불가능하다.  
* 서울외의 수도권에서도 대중교통 수요가 많기 때문에 서울 외 수도권에서도 기후동행카드를 지원해줄 필요가 있다.

## 5. 자료 출처
교통카드 빅데이터 통합정보시스템 
서울특별시 분야별 정보
서울시 열린데이터광장
경기도 교통정보센터
서울특별시 대중교통 출발/도착 현황

  
## 사용 라이브러리
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/4de7a244-a485-4002-8c48-9694397fdf47" width="100">
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/3b056ae2-19aa-49be-bdea-bda7a40e5983" width="100">
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/96e06ebd-8072-4c3f-a58f-677ee405b667" width="100">
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/dafc4af6-b82d-45e8-8afb-48c057c3fe50" width="100">
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/cda68d27-ed0d-49eb-9dce-f28780cb27a3" width="100">
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/e33a3f63-575c-4931-b10b-1cf41ca59d1e" width="100">
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/8971bbb1-c13c-431c-8961-3d23b04108a7" width="100">
<img src="https://github.com/addinedu-ros-5th/eda-repo-3/assets/55865857/3b8eeda8-c29b-4c60-8625-aa99d6c762b5" width="100">  
