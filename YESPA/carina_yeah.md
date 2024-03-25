# 기후동행카드 분석

#### 서울, 경기, 인천의 대중교통 통행량 비교
- 서울 지역의 통행량이 제일 많은 것으로 확인할 수 있다.
![Screenshot from 2024-03-25 11-14-53](https://github.com/1yohanyo1/remote_project/assets/163791820/884ceabd-57ce-48f8-8fba-5435a02bfc86)

- 서울 지역이 압도적으로 많아 서울을 제외한 나머지 구간의 교통량 차이 시각화
  - 서울 ↔ 경기, 서울 ↔ 인천, 인천 ↔ 인천, 경기 ↔ 경기

![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/81258eb7-f4b9-402f-bbdd-c960e3925016)

#### 월별 대중교통의 통행량 추이 시각화
개강과 종강일에 맞춰 통행량의 차이가 있음을 확인이 가능하다.
![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/1edc8a18-433d-452c-b33c-9a3f9ca349ff)

### 언제 많이 교통량이 증가하는지 알았으니 누가 어떤 수단을 많이 이용하는지를 분석해보겠습니다.
#### 교통수단별 이용빈도 시각화
- 도시철도가 가장 많은 것을 확인할 수 있고 시내버스, 광역버스, 마을버스 등을 많이 이용하는 것을 확인할 수 있다.
![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/65bbbcf1-12f9-42e2-abcf-4d9ffdce804f)

#### 따릉이 사용 시각화
- 따릉이도 출근시간대 8~9시 사이/ 퇴근시간대 17~19시 사이가 가장 많이 사용하는 것을 알 수 있다.
![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/f6a4ac36-42e5-495c-ad3c-2735f9ebe6dc)
- 극좌표 그래프를 통해 오전/오후 시간대별 따릉이 사용 빈도수 시각화
![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/9c0e12c8-bbfa-416a-acb3-4ce72f2f27b3)

#### 이용자유형별 통행량 시각화
- 일반인이 가장 많은 것을 확인할 수 있다.
![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/2a08e683-fa75-4a43-9561-02068225ede1)



























### 환경 관련 데이터

#### 차종 별 추정 대수 (승용차, 버스, 화물차)
- 승용차가 가장 많고 버스는 그에 비해 굉장히 적은 것을 확인할 수 있다.
![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/828571bf-761e-4e86-9aab-5754b62f3c6e)

#### 시도별 추정 대수 (버스)
- 서울, 인천, 경기 순으로 많이 이용되는 것을 확인할 수 있다.
![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/f36a3e7d-ae59-498d-a6f1-8492d1362799)

#### 시도별 온실가스 평균, 차량 이동 거리 평균을 시각화
- 두개의 그래프가 굉장히 일치하는 것을 알 수 있다.
- 차량이 많이 이동한 곳은 온실가스도 높다.
![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/301744d0-4b1e-4447-ab51-c11a82c41b96)

###### 피어슨 상관관계

- 상관관계 수치를 통해 수치가 0.85xx 로 관련이 있는 것을 알 수 있다.
```
from scipy.stats import pearsonr

correlation, p_value = pearsonr(distance_sum_by_sido.sum(axis=1), pollutants_sum_by_sido.sum(axis=1))
print("피어슨 상관계수:", correlation)
```
![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/1bcf6468-af92-4a21-ad2e-1c72a14d1e5b)

#### 히트맵을 통한 (온실가스,이동거리) 상관관계 시각화1

![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/9d4d1837-3aab-476a-8039-409e35b3724b)

#### 산점도를 통한 (온실가스, 이동거리) 상관관계 시각화2

![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/e856a830-fa1b-4058-9260-19e4e8eba661)

#### 년도별 오염물질 시각화
- 증가하고 감소하는 것을 알 수 있다.
![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/1792f6e1-9dba-416b-987f-b93cfbb944b5)

###### 기후동행카드를 통해 대중교통의 이용자 수를 늘리면 온실가스수치도 낮출 수 있다 예상한다. 
- 승용차 1km당 210g, 버스 27.7g, 지하철 1.53g

###### 기후동행카드와 비슷한 사례인 독일 9유로카드를 사용하여 대중교통이룡량 25% 상승, 온실가스 180만톤을 절감한 사례가 있다.
- 대한민국 온실가스 목표치인 3만2천톤을 절감하려면 하루 평균 차량 약 40만대의 인원이 대중교통을 이용하면 목표치에 도달할 수 있다.
    - 기후동행카드 40만장 이상을 발급하여 사용 하면 좋은 결과기 있을 것이라 예상한다.
 
### AMP(apache2, mysql, php)
###### 기후동행카드가 적용된다면 얼마만큼의 할인을 받을 수 있을까 ?
- 출발지와 도착지는 학원에 근접하게 위치한 가산디지털단지 역으로 선정
- 출발지와 도착지를 입력 후 금액 조회를 누르게 되면 한달 출퇴근 20일 가정 시 산정되는 금액이 나온다.
- 기후돟행카드 사용 전 / 후 손익퍼센트도 출력하여 확인할 수 있다.
![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/45d6b047-8a91-47a3-97ba-d4dc20c35aae)

ex1)
![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/c1f8fcab-5143-44d8-a2a5-b1d4d3479f48)

ex2)
![image](https://github.com/addinedu-ros-5th/eda-repo-3/assets/163791820/5cb9bf93-001f-414b-856e-8fcd8203d603)

